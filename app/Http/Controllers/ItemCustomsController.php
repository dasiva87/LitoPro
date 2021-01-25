<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemCustom;

class ItemCustomsController extends Controller{

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
        $itemCustom = ItemCustom::all();
        return $itemCustom;
    }
}