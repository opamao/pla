<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relever extends Model
{
    use HasFactory;

    protected $table = 'relever';
    protected $primaryKey = 'idreleve';
    protected $fillable = [
        'engin_id',
        'parcelle_id',
        'debut',
        'fin',
    ];
}
