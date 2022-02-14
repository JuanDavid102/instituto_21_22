<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Centro extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'web',
        'situacion',
        'coordinador',
        'verificado'
    ];

    public function user()
    {
        // belongsTo supone que clave primaria es 'id' y clave ajena 'nombreTabla_id', para cambiarlo:
        // ----------------Clase a relacinar -- Nombre de clave ajena(en Centro) -- Nombre clave primaria(en User)
        return $this->belongsTo(User::class,      'coordinador');
    }
}
