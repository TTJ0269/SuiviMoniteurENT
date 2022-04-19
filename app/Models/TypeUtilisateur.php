<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUtilisateur extends Model
{
    
    protected $guarded = [];

    protected $attributes=['etatsup'=> 0];

     //Pour recuperer les utilisateurs qui appartient à un type utilisateur
     public function users()
     {
         return $this->hasMany('App\Models\User');
     }
}
