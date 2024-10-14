<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduitFini extends Model
{
    protected $table = "produit_finis";
    protected $fillable = [
        'nombre_produit_fini',
    ];
    use HasFactory;
}
