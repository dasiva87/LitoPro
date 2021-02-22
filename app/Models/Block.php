<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model 
{

    protected $primaryKey = "id";

    protected $fillable = [
        'cantidad',
        'descripcion',
        'tamano_hor',
        'tamano_ver',
        'cantidad_montaje',
        'corte_papel_hor',
        'corte_papel_ver',
        'numero_juegos',
        'numero_de_copias',
        'numero_tintas_tiro',
        'numero_tintas_retiro',
        'vr_diseno',
        'vr_transporte',
        'vr_refile',
        'tipo_union',
        'union_por',
        'inicio_numeracion',
        'type_paper_id',
        'type_machine_id',
        'created_at',
        'updated_at',
    ];


}
