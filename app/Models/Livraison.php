<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    protected $table = "livraisons";
    protected $fillable = [
        'fournisseur_id',
        'sous_fournisseur_id',
        'commande_id',
        'quantite'
    ];
    use HasFactory;
}
