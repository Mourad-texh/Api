<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = "produits";
    protected $fillable = [
        'fornisseur_id',
        'nom_produit',
        'description',
        'prix'
    ];
    use HasFactory;
}
