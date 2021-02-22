<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'titulo',
        'contenido',
        'categoria',
        'estado',
        'foto',
        'foto_dir',
        'created_at',
        'modified_at',
        'user_id',
        'business_id'
    ];

    // public $timestamps = false;
}