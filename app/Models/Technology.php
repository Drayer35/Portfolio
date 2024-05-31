<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'description',
        'image'
    ];

    protected $table ='technologies';


     // ManyToMany
    public function proyects(){
        return $this->belongsToMany(Proyect::class);
    }
}
