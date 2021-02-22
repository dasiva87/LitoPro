<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model{
    protected $primaryKey = "id";


    protected $fillable = [
        'document_detail_id',
        'created_at',
        'modified_at',
        'user_id',
        'business_id'
    ];

    // public $timestamps = false;
}