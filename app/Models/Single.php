<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Single extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'descripcion',
        'tamano_hor',
        'tamano_ver',
        'cantidad_montaje',
        'corte_papel_hor',
        'corte_papel_ver',
        'numero_tintas_tiro',
        'numero_tintas_retiro',
        'vr_diseno',
        'vr_transporte',
        'vr_refile',
        'inicio_numeracion',
        'type_paper_id',
        'type_machine_id',
        'created_at',
        'modified_at'
    ];

    // public $timestamps = false;
}