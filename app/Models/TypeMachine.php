<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeMachine extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'codigo',
        'nombre',
        'tamano_min_hor',
        'tamano_min_ver',
        'tamano_max_hor',
        'tamano_max_ver',
        'precio',
        'created_at',
        'modified_at',
        'type_ctp_id',
        'third_id',
        'business_id',
        'user_id'
    ];

    // public $timestamps = false;
}