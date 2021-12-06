<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ExampleComponent extends Component
{
    public $car = 'mersedes';
    public $count = 0;

    public function qqq()
    {

        $this->car = 'жигули';

    }
    public function inc(){
        $this->count++;
    }
    public function render()
    {

        return view('livewire.example-component',['ss'=>'Dfcz']);
    }
}
