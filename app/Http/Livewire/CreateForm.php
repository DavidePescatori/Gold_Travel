<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    
    // public $name, $price, $description, $bEb, $pranzo, $parcheggio, $wifi, $smoking, $pulizia, $animali, $cancellazione, $pagamento, $servizio;
    public $name, $price, $description, $category;
    
    // dd(Auth()->user());
    protected $rules = [
        'name' => 'required|min:2',
        'price' => 'required|numeric',
        'description' => 'required|min:10|max:300',
        'category'=> 'required',
        
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function store(){
        
        $this->validate();
        
        $category = Category::find($this->category);
        
        $article = $category->articles()->create([
            
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'category'=> $this->category,
            
        ]);
        
        Auth::user()->articles()->save($article);
        
        session()->flash('articleCreated', 'Hai correttamente inserito il tuo annuncio.');
        
        $this->reset();
        
        
    }
    
    public function messages(): array
    {
        return [
            'name.required' => 'Devi inserire una destinazione',
            'name.min' => 'La destinazione deve contenere almeno :min caratteri',
            'price.required' => 'Devi inserire un prezzo',
            'price.numeric' => 'Il prezzo deve essere un numero, separato da un punto',
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










