<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use App\Models\Opportunitie;
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
    public function explore()
    {
        return  view('web.explore');
    }
    public function team()
    {
        return view('web.team');
    }
    public function exploreSeacrh($id, $pageno)
    {
        //    else {
        $search = Opportunitie::where('op_id', $id)
            ->where('isForAll', 1)
            ->get();
        return view('web.content')->with(compact('search', 'id', 'pageno'));
        // }

        // $search_new = Opportunitie::join('opportunities_category','opportunitie.op_id','opportunities_category.op_id')
        // ->where('op_id',$id)->get();  
        // return response()->json([$search_new]);
    }
    public function womensearch($id)
    {
        $search = Opportunitie::where('op_id', $id)
            ->where('isForwomen', 0)
            ->get();
        $no = 1;



        return view('web.content')->with(compact('search', 'no'));
    }
    public function test()
    {
        $search = Opportunitie::where('op_id', 1);


        return response()->json([$search]);
        # code...
    }
    public function readmore($search)
    {
        $read = Opportunitie::where('opid', $search)->get();
        if ($read) {
            return view('web.read')->with(compact('read'));
        } else {
            echo "not found";
        }
    }
    public function newsLetter(Request $request)
    {
        validator([
            'email' => 'required'
        ]);
        $news = new NewsLetter;
        $news->email = $request['email'];
        $news->isSubscribied = 1;
        $news->save();
        return to_route('web.home');
    }
}
