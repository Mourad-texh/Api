<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{

    protected $table = "commandes";
    protected $fillable = [
        'evenement_id',
        'quantite_commande',
    ];
    use HasFactory;
}
