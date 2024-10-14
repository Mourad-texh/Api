<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dechet extends Model
{

    protected $table = "dechets";
    protected $fillable = [
        'nombre_dechet',
    ];
    use HasFactory;
}
