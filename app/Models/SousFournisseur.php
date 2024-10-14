<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousFournisseur extends Model
{
    use HasFactory;
    protected $table = "sous_fournisseur";
    protected $fillable = [
        'fournisseur_id',
        'nom_sous_fournisseur',
        'adresse',
    ];
}
