<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCtp;

class TypeCtpsController extends Controller{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    //

    function index (Request $request){
        $typeCtp = TypeCtp::all();
        return $typeCtp;
    }
}