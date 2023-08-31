<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    use HasFactory;
    protected $fillable = [
        'details',
    ];

    // Une alerte ne concerne qu'un seul bloc à la fois 

    public function bloc (){
        return $this->belongTo(Bloc::class);
    }
}
