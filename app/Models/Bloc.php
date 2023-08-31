<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'temperature',
        'luminosite'
    ];


    // Dans un bloc , on peut avoir une ou plusieurs alertes
    Public function alertes (){
         $this->hasMany(Alerte::class);
    }
    // Dans un bloc , on ne peut avoir qu'une seule culture
    public function culture () {
        $this->belongTo(Culture::class);
    }
    // Dans un bloc on peut appartenir à un projet 
    public function projet () {
        $this->belongTo(Projet::class);
    }
}
