<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeSheet extends Model{
    protected $primaryKey = "id";

    protected $fillable = [
        'tipo',
        'cantidad',
        'tamano_hor',
        'tamano_ver',
        'cantidad_montaje',
        'tamano_corte_papel_hor',
        'tamano_corte_papel_ver',
        'numero_tintes_tiro',
        'numero_tintas_retiro',
        'type_paper_id',
        'single_id',
        'printing_id',
        'block_id',
        'created_at',
        'modified_at',
        'business_id'
    ];

    // public $timestamps = false;
}