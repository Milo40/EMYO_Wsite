<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produit';

    public function utilisateur(){
        return $this->belongsToMany(Utilisateur::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function vente(){
        return $this->belongsTo(Vente::class);
    }
}
