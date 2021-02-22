<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCustom extends Model{

    protected $primaryKey = "id";


    protected $fillable = [
        'descripcion',
        'valor_unitario',
        'created_at',
        'modified_at',
        'cantidad'
    ];

    // public $timestamps = false;
}