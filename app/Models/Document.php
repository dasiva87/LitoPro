<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model 
{

    protected $primaryKey = "id";

    protected $fillable = [
        'tipo',
        'estado',
        'numero',
        'validez',
        'observaciones',
        'subtotal',
        'descuento',
        'iva',
        'total',
        'created_at',
        'modified_at',
        'third_id',
        'user_id',
        'business_id'
    ];


}
