<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'sistema_metrico',
        'inicio_numeracion_cotizacion',
        'inicio_numeracion_orde_pedido',
        'inicio_numeracion_orden_impresion',
        'porcentaje_ganancia',
        'porcentaje_sobrante',
        'default_vr_diseno',
        'default_vr_trasporte',
        'default_vr_refile',
        'foto',
        'foto_dir',
        'created_at',
        'modified_at',
        'business_id'
    ];

    // public $timestamps = false;
}