<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteGeo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'temp_moyenne',
        'pays',
        'region',
        'ville'
    ];
    /**
     * Un site geo peut avoir plusieurs projets
     */
    public function projets (){
        return $this->belongToMany(Projet::class);
    }
}
