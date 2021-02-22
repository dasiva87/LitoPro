<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Printing extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'cantidad',
        'descripcion',
        'tamano_cerrado_hor',
        'tamano_cerrado_ver',
        'vr_diseno',
        'vr_transporte',
        'union_por',
        'tipo_union',
        'created_at',
        'modified_at',
        'type_machine_id',
        'type_paper_id'
    ];

    // public $timestamps = false;
}