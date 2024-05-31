<?php

namespace App\Livewire\Proyect;

use App\Models\Proyect;
use Livewire\Component;

class View extends Component
{

    public $show=false;

    public function render()
    {
        $proyects =Proyect::with('images')->with('technologies')->take(6)->get();
        return view('livewire.proyect.view',compact(['proyects']));
    }
}
