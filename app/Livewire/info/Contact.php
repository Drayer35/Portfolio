<?php

namespace App\Livewire\Info;

use App\Mail\ContactMeMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public function index(){
        return view('livewire.info.contact');
    }
    public function store(Request $request){
        Mail::to('monrroydev@gmail.com')->send(new ContactMeMailable($request->all()));
    }

    public function render()
    {
        return view('livewire.info.contact');
    }
}
