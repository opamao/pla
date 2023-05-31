<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    use HasFactory;

    protected $table = 'locataires';
    protected $fillable = [
        'nom_loca',
        'prenom_loca',
        'phone_loca',
        'email_loca',
        'motdepasse',
        'photo_loca',
        'fonction',
        'etat_loca',
    ];
    protected $hidden = [
        'motdepasse',
    ];
    protected $primaryKey = 'locaid';
}
