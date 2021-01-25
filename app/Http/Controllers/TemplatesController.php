<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplatesController extends Controller{
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
        $template = Template::all();
        return $template;
    }
}