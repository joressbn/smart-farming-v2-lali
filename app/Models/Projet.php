<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
    /**
     *  Un projet peut etre gerer par une equipe
     */
    public function equipes () {
        return $this->belongToMany(Equipe::class);
    }
    /**
     * Un projet peut appartenir à un utilisateur
     */
    public function user (){
        return $this->belongTo(User::class);
    }
    /**
     * Un projet contient une culture
     */
    public function cultures (){
        return $this->belongToMany(Culture::class)
                    ->withPivot('bloc_id')
                    ->withTimestamps;
    }
    /**
     * un projet peut se faire sur plusieurs sites geographiques
     */
    public function sitegeos(){
        return $this->belongToMany(SiteGeo::class);
    }

}
