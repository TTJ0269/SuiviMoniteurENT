<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $guarded = [];

    protected $attributes=['etatsup'=> 0];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
