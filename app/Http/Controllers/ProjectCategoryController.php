<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oppr = User::join('project_categories', 'users.id', 'project_categories.id')
            ->get([
                'users.email', 'users.name AS name',
                'project_categories.name AS Category_Name',
                'project_categories.pcid AS category_id',
                'project_categories.image AS Category_Photo'
            ]);
        return view('admin.project')->with(compact('oppr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required'
        ]);
        $img = $request->file('image');
        $ext = $img->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;
        $img->move('upload/category_img/', $file_name);
        $projectCateogry = new  ProjectCategory;
        $projectCateogry->name = $request['name'];
        $projectCateogry->image = $file_name;
        $projectCateogry->id = session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $projectCateogry->save();
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
        $delete = ProjectCategory::find($id);
        $delete->delete();
        return to_route('projectCa.create');
    }
}
