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
        'name' => 'required|min:3',
        'price' => 'required',
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

        session()->flash('articleCreated', 'Hai correttamente inserito il tuo annuncio');

        $this->reset();

        
            }
        
            public function render()
            {
                return view('livewire.create-form');
            }
        }
        
            
            
            
    
        




