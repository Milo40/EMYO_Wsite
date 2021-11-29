<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function utilisateur(){
        return $this->belongsToMany(Utilisateur::class);
    }

    public function categorie(){
        return $this->belongsToMany(Categorie::class);
    }
}
