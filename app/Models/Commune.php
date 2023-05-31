<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $table = "communes";

    protected $fillable = [
        "libelle_commune",
        "ville_id"
    ];

    protected $primaryKey = "communeid";
}
