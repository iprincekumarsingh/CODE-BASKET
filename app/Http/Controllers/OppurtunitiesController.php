<?php

namespace App\Http\Controllers;

use App\Models\Opportunitie;
use App\Models\Opportunities_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Random;

class OppurtunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Opportunities_category::select('name', 'op_id')->get();
        $cat = Opportunitie::where('approved', 1)
            ->orWhere('approved', null)
            ->get();

        return view('admin.oppurtunities')->with(compact('data', 'cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'op_name' => 'required',
            'desc' => 'required',
            'image'=>'required',
           

        ]);

        $img = $request->file('image');
        $ext = $img->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;

        $img->move('upload/oppurtunity/', $file_name);
       


        $data = new Opportunitie;
        $data->name = $request['op_name'];
        $data->description = $request['desc'];
        $data->link = $request['url_link'];
        $data->link2 = $request['url_link2'];
        $data->op_id = $request['op_id'];
        $data->isForAll = $request['all'];
        $data->isForwomen = $request['women'];
       
        if (Auth::user()->user_role_type == "user") {
            // if the user upload the resources
            $data->uploaded_by_role = 1;
            $data->approved = 0;
        }
        if ($request['image2'] == null) {
        } else {
            $img2 = $request->file('image2');
            $ext2 = $img2->getClientOriginalExtension();
            $file_name2 = time() . '.' . $ext2;
            $img2->move('upload/oppurtunity/', $file_name2);
            $data->post_photo2 = $file_name2;
        }
        $data->post_photo1 = $file_name;
        $data->aid = session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $data->post_id = rand(2, 9999999);;
        $data->save();
        return to_route('oppurtunity.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    public function approval()
    {
        $approve = Opportunitie::where('approved', 0)->get();

        // return response()->json([$approve])
        return view('admin.approval')->with(compact('approve'));
        // return view('admin.approval');
    }

    // Approve || disapprove function
    public function approve($id)
    {
        $approve = Opportunitie::find($id);
        $approve->approved = 1;
        $approve->save();
        return to_route('approval');
    }

    public function disapprove($id)
    {
        $approve = Opportunitie::find($id);
        $approve->approved = 0;
        $approve->save();
        return to_route('oppurtunity.create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Opportunitie::find($id);
        $delete->delete();
        return to_route('oppurtunity.create');
    }
}
