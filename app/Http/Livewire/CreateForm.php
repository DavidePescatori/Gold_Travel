<?php

namespace App\Http\Livewire;
use app;
use livewire;
use App\Models\Article;
use App\Models\Service;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\Removefaces;
use App\Jobs\ResizeImage;
use App\Jobs\waterMarkJob;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Spatie\Image\Manipulations;
use Illuminate\Support\Facades\App as FacadesApp;
use Illuminate\Validation\Rules\In;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;



class CreateForm extends Component
{
    use WithFileUploads;
    // public $name, $price, $description, $bEb, $pranzo, $parcheggio, $wifi, $smoking, $pulizia, $animali, $cancellazione, $pagamento, $servizio;
    public $name, $price, $description, $category, $services;

    public $selectedServices =[];


    // public per menù a tendina dei comuni
    public $query = '';
    public $suggestions = [];
    public $citySelected = false;
    public $selectedCity;
    public $temporary_images;
    public $images =[];
    public $image;
    public $form_id;
    public $user_id;
    protected $rules = [

        'name'=> 'required',
        'price'=> 'required|numeric',
        'description'=> 'required|min:10|max:3000',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
        'user_id'=>'required'
    ];
    protected $messages =[
     'temporary_images.*.image' => 'I file devono essere immagini',
     'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb'
    ];
    
    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key)
    {
    if(in_array($key, array_keys($this->images))) {
      unset($this->images[$key]);
        }
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    // funzione per menù a tendina comuni
    public function updatedQuery()
    {
        $this->suggestions = [];
        
        if (!empty($this->query)) {
            $csvFile = fopen(storage_path('comuni/Elenco-comuni-italiani.csv'), 'r');
            $suggestions = [];
            $query = strtoupper($this->query);
            while (($comune = fgetcsv($csvFile)) !== false) {
                $nome = $comune[0];
                if (strpos(strtoupper($nome), $query) === 0) {
                    $suggestions[] = $nome;
                }
            }
            fclose($csvFile);
    
            $this->suggestions = $suggestions;
        }
    }
    
        
        public function selectCity($name)
        {
            $this->name = $name;
            $this->query = $name;
            $this->suggestions = [];
            $this->selectedCity = $name;
            $this->citySelected = true;
        }

      //fine funzione per menù a tendina comuni
    
      public function mount()
      {
        $this->services = Service::all();
      }
    


      public function store(){
        $this->user_id = Auth::user()->id; 
        $this->validate();
        $this->article = Category::find($this->category)->articles()->create($this->validate());
        if(count($this->images)){
            foreach ($this->images as $image) {
                // $this->article->images()->create(['path'=>$image->store('images', 'public')]); 
                $newFileName = "articles/{$this->article->id}";    
                $newImage = $this->article->images()->create(['path'=>$image->store($newFileName, 'public')]);
                
                Removefaces::withChain([
                    new ResizeImage($newImage->path, 400, 300),
                    new ResizeImage($newImage->path, 800, 400),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
          
            } 

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        

        $selectedServices = Service::whereIn('id', $this->selectedServices)->get();
    
        $this->article->services()->sync($selectedServices);
        
        if (FacadesApp::isLocale('it')) {
            session()->flash('articleCreated', 'Hai correttamente inserito il tuo annuncio.');
        } elseif (FacadesApp::isLocale('en')){

            session()->flash('articleCreated', 'You have correctly placed your ad.');
        } elseif (FacadesApp::isLocale('es')){

            session()->flash('articleCreated', 'Ha publicado correctamente su anuncio.');
        }
        
        $this->cleanForm();
        
        
    }

    public function cleanForm(){
        $this->title ='';
        $this->body ='';
        $this->category='';
        $this->image='';
        $this->images=[];
        $this->temporary_images =[];
        $this->form_id =rand();    
    }

    
    
    public function messages(): array
    {
        return [
            'name.required' => 'Devi inserire una destinazione',
            'price.required' => 'Devi inserire un prezzo',
            'price.numeric' => 'Il prezzo deve essere un numero, separato da un punto',
            // 'price.max' => 'Devi inserire un prezzo di massimo 8 cifre',
            'description.required' => 'Devi inserire una descrizione',
            'description.min' => 'La descrizione deve contenere tra i :min e i 2000 caratteri',
            'description.max' => 'La descrizione deve contenere tra i :min e i 2000 caratteri',
            'category.required' => 'Devi selezionare una regione',

        ];
    }

    
    public function render()
    {

        return view('livewire.create-form');
    }
}