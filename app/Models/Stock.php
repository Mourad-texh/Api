<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stocks";
    protected $fillable = [
        'livraison_id',
        'nombre_total',
    ];
    use HasFactory;
}
