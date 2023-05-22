<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateForm extends Component
{

    public $name, $price, $description, $bEb, $pranzo, $parcheggio, $wifi, $smoking, $pulizia, $animali, $cancellazione, $pagamento, $servizio;

    public function render()
    {
        return view('livewire.create-form');
    }
}
