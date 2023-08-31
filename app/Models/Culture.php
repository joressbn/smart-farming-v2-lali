<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'temp_min',
        'temp_max',
        'TCO2_min',
        'TCO2_max',
        'VsH2O_min',
        'VsH2O_max',
    ];
    /**
     * Une Culture peut se faire dans plusieurs blocs
     */
    public function blocs (){
        return $this->hasMany(Bloc::class);
    }
    /**
     * Une culture peut composer 0 ou plusieurs projets
     */
    public function projets (){
        return $this->belongToMany(Projet::class)
                    ->withPivot('bloc_id')
                    ->withTimestamps;
    }
}
