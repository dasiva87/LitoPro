<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model 
{

    protected $primaryKey = "id";

    protected $fillable = [
        'activa',
        'activa_hasta',
        'nombre',
        'tipo_doc',
        'numero_doc',
        'telefono',
        'celular',
        'email',
        'direccion',
        'created_at',
        'modified_at'      
    ];


}
