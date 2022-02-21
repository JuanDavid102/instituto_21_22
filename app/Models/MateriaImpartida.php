<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaImpartida extends Model
{
    use HasFactory;

    protected $fillable=[
        "docente",
        "grupo",
        "materia"
    ];

    protected $table = "materia_impartidas";

    public function profesor()
    {
        return $this->belongsTo(User::class, "docente");
    }
}
