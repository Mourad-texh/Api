<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traiter extends Model
{
    protected $table = "traiters";
    protected $fillable = [
        'stock_id',
    ];
    use HasFactory;
}
