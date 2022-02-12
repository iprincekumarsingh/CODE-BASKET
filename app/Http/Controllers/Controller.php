<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Opportunitie;
use App\Models\Opportunities_category;
use App\Models\Project;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // public function home()
    // {
    //     # code...
    //     return view('web.home');
    // }

    public function approval()
    {
        $approve = Opportunitie::where('approved', 0)->get();

        // return response()->json([$approve])
        return view('admin.approval')->with(compact('approve'));
        // return view('admin.approval');
    }

    public function dashboard()
    {
        $catid = Opportunities_category::select('op_id', 'name')->get();
        $ccuser = User::select('id')->get();
        $project = Project::select('project_id')->get();
        $game = Opportunitie::where('op_id', 4)
            ->select('op_id')->get();
        $game = count($game);
        $studentAid = Opportunitie::where('op_id', 3)
            ->select('op_id')->get();
        $studentAid = count($studentAid);
        $approved = Opportunitie::where('approved', 0)
            ->select('approved')->get();
        $approved = count($approved);
        $projectCount = count($project);
        $userid = count($ccuser);
        $opp = Opportunitie::select('op_id')->get();
        $num = count($catid);
        $num2 = count($opp);
        return view('dashboard')->with(compact('num', 'num2', 'catid', 'userid', 'projectCount', 'game', 'studentAid', 'approved'));
    }
}
