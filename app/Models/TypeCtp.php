<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeCtp extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'codigo',
        'nombre',
        'tamano_hor',
        'tamano_ver',
        'precio',
        'created_at',
        'modified_at',
        'third_id',
        'business_id',
        'user_id'
    ];

    // public $timestamps = false;;
}