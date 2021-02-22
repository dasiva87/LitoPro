<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finishe extends Model{

    protected $primaryKey = "id";


    protected $fillable = [
        'unidad_de_medida',
        'medida',
        'descripcion',
        'precio',
        'created_at',
        'modified_at',
        'third_id',
        'business_id'
    ];

    // public $timestamps = false;
}