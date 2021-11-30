<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $table = 'vente';

    public function utilisateur(){
        return $this->belongsToMany(Utilisateur::class);
    }

    public function produit(){
        return $this->belongsToMany(Produit::class);
    }
}
