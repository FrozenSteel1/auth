<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Example extends Component
{
    public $count=0;
    public function qqq(){
        $this->count++;
    }
    public function render()
    {
        return view('livewire.example',['ss'=>'Dfcz']);
    }
}
