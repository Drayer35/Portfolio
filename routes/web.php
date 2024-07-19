<?php
use App\Livewire\Proyect\View;
use App\Livewire\Info\Contact;
use App\Mail\ContactMeMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::controller()->group(function(){
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('contactme',[Contact::class,'index'])
->name('contactme.index');
Route::post('contactme',[Contact::class,'post'])
->name('contactme.post');
// Route::get('contactme',function() {
//     Mail::to('jdcyonel2@gmail.com')->send( new ContactMeMailable);

//     return "Mensaje enviado";
// });