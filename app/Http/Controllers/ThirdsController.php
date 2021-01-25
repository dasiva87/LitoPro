<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Third;

class ThirdsController extends Controller{
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
        $third = Third::all();
        return $third;
    }
}