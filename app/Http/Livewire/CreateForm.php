<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{

    // public $name, $price, $description, $bEb, $pranzo, $parcheggio, $wifi, $smoking, $pulizia, $animali, $cancellazione, $pagamento, $servizio;
    public $name, $price, $description, $area;

    // dd(Auth()->user());
    protected $rules = [
        'name' => 'required|min:3',
        'price' => 'required',
        'description' => 'required|min:10|max:300',
        'area' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function store(){
        
        $this->validate();
        

        $user= Auth::user();

        // $user->articles()->create([
            
            //     'name' => $this->name,
            //     'price' => $this->price,
        //     'description' => $this->description,
        //     'area' => $this->area,

        // ]);
        
        $user->articles()->create([
            
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'area' => $this->area,
        ]);
        

        session()->flash('articleCreated', 'Hai correttamente inserito il tuo annuncio');

        $this->reset();

        // return redirect(route('article.index'));



    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
