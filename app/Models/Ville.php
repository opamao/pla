<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $table = "villes";

    protected $fillable = [
        "libelle_ville",
        "pays_id",
    ];

    protected $primaryKey = "villeid";
}
