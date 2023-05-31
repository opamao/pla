<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propritaire extends Model
{
    use HasFactory;
    protected $table = 'proprietaires';
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'motdepasse',
    ];
    protected $hidden = [
        'motdepasse',
    ];
    protected $primaryKey = 'proprioid';
}
