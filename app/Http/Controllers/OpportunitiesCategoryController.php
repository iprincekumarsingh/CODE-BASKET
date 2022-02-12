<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Opportunities_category;

use function PHPUnit\Framework\isNull;

class OpportunitiesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $oppr = User::join('opportunities_category', 'users.id', 'opportunities_category.aid')
        //     ->get([
        //         'users.email', 'users.name AS name',
        //         'opportunities_category.name AS Category_Name',
        //         'opportunities_category.op_id AS cat_id',
        //         'opportunities_category.cat_photo AS Category_Photo'
        //     ]);
        // return view('web.category')
        //     ->with(compact('oppr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $oppr = User::join('opportunities_category', 'users.id', 'opportunities_category.aid')
            ->get([
                'users.email', 'users.name AS name',
                'opportunities_category.name AS Category_Name',
                'opportunities_category.op_id AS cat_id',
                'opportunities_category.cat_photo AS Category_Photo'
            ]);
        return view('admin.category')->with(compact('oppr'));
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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'cat_name' => 'required'
        ]);
        $img = $request->file('image');
        $ext = $img->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;
        $img->move('upload/category_img/', $file_name);
        $user = User::select('name')->where('id', session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
            ->value('name');

        $oppr = new   Opportunities_category;
        $oppr->name = $request['cat_name'];;
        $oppr->created_by = $user;
        $oppr->cat_photo = $file_name;
        $oppr->img_name = $img;
        $oppr->aid = session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $oppr->save();
        return to_route('oppurtunity_cat.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // $oppr = Opportunities_category::where('op_id',$id);
        $data = Opportunities_category::find($id);

        if ($data == null) {
            return redirect('/view_category')->with('ID not found');
        } else {
            $data->delete();
            return to_route('oppurtunity_cat.create');
        }
    }
}
