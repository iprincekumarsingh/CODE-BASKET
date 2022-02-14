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

   

    public function dashboard()
    {
        // to show user submission is approved or not
        //  Opportunities_category::select('name', 'op_id')->get();
        $cat = Opportunitie::where('aid', session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
            ->where('uploaded_by_role', 1)
            ->get();

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
        return view('dashboard')->with(compact('num', 'num2', 'catid', 'userid', 'projectCount', 'game', 'studentAid', 'approved', 'cat'));
    }
}
