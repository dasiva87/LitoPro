<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Single;

class SinglesController extends Controller{
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
        $single = Single::all();
        return $single;
    }
}