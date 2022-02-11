<?php

namespace App\Http\Controllers;

use App\Models\Opportunitie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function home()
    {
        # code...
        return view('web.home');
    }

    public function approval()
    {
        $approve = Opportunitie::where('approved', 0)->get();

        // return response()->json([$approve])
        return view('admin.approval')->with(compact('approve'));
        // return view('admin.approval');
    }
}
