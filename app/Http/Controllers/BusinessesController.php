<?php

namespace App\Http\Controllers;
use App\models\Business;
use Illuminate\Http\Request;

class BusinessesController extends Controller
{
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
        $business = Business::all();
        //$user -> name = 'darwin';
        //$user -> email = 'darwin@gmail.com';
        return $business;
    }


}
