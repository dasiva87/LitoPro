<?php

namespace App\Http\Controllers;
use App\models\Block;
use Illuminate\Http\Request;

class BlocksController extends Controller
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
        $block = Block::all();
        return $block;
    }


}
