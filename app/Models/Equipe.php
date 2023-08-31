<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    /** 
     *  Dans une equipe on peut avoir 1 ou plusieurs users
    */
    public function users(){
        return $this->belongsToMany(User::class);
    }
    /**
     * Une equipe peut etre associer à un ou plusieurs
     */
    public function projets (){
        return $this->belongToMany(Projet::class);
    }
}
