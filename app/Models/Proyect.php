<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyect extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'header',
        'body',
        'link',
        'date',
    ];

    protected $table ='proyects';

    // ManyToMany
    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
    public function images(){
        return $this->belongsToMany(Image::class);
    }
}
