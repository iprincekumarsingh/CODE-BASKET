<?php

namespace App\Http\Controllers;

use App\Models\Opportunities_category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //

    public function index()
    {
        # code...
        return view('web.index');

    }
    public function expore()
    {
        // $explore = Opportunities_category::where('')
    }

    // admin Dashboard Frontend
    public function content($id)
    {
    //    $content = 
    }
}
