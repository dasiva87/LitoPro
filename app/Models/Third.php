<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Third extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'foto',
        'foto_dir',
        'tipo',
        'nombre',
        'tipo_doc',
        'numero_doc',
        'telefono',
        'celular',
        'email',
        'direccion',
        'created_at',
        'modified_at',
        'user_id',
        'business_id'
    ];

    // public $timestamps = false;
}