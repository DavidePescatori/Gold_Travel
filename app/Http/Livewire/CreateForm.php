<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Service;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\In;
use Illuminate\Support\Facades\Auth;
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
    protected $rules = [

        'name'=> 'required',
        'price'=> 'required|numeric',
        'description'=> 'required|min:10|max:300',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024'
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
        
        $this->validate();
        $this->article = Category::find($this->category)->articles()->create($this->validate());
        if(count($this->images)){
            foreach ($this->images as $image) {
                $this->article->images()->create(['path'=>$image->store('images', 'public')]);          
            } 
        }
        
        $category = Category::find($this->category);

        
        $article = $category->articles()->create([
            
            'name' => $this->query,
            'price' => $this->price,
            'description' => $this->description,
            'category'=> $this->category,

            
        ]);

        $selectedServices = Service::whereIn('id', $this->selectedServices)->get();
    
        $article->services()->sync($selectedServices);
        
        Auth::user()->articles()->save($article);

        
        session()->flash('articleCreated', 'Hai correttamente inserito il tuo annuncio.');
        
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
            'description.min' => 'La descrizione deve contenere tra i :min e i 300 caratteri',
            'category.required' => 'Devi selezionare una regione',

        ];
    }

    
    public function render()
    {

        return view('livewire.create-form');
    }
}










