<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourniseur extends Model
{
    protected $table = "fournisseurs";
    protected $fillable = [
        'nom_fournisseur',
        'adresse',
    ];
    use HasFactory;
}
