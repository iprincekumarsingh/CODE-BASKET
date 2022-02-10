<?php

use App\Models\Opportunities_category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});


Route::get('/sub', function () {
    $email = "princekumar2000.pks@gmail.com";
    $path = '@';
    $pos = strpos($email, $path);
    $username = Str::substr($email, 0, $pos);
    return $username;
});

Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/oppur', function () {


        return  response()->json(["Message" => 'success', 'session' => session()]);
    });
    Route::get('/cat', function () {
        $oppr = User::join('opportunities_category', 'users.id', 'opportunities_category.aid')
            ->where('opportunities_category.aid', '=', session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
            ->get(['users.email', 'users.name AS Name', 'opportunities_category.name AS Category Name', 'opportunities_category.op_id AS Category ID', 'opportunities_category.cat_photo AS Category Photo']);
        return response()->json([$oppr]);

    })->name('cat');
    // REPEAT('*', CHAR_LENGTH(phone) - 6))
    Route::get('/add', function () {
        return view('admin.category');
    })->name('user');

    Route::post('/add', function (Request $request) {

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $img = $request->file('image');
        $ext = $img->getClientOriginalExtension();
        $file_name = time() . '.' . $ext;
        $img->move('upload/category_img/', $file_name);

        $user = User::select('name')->where('id', session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))->value('name');

        $oppr = new   Opportunities_category;
        $oppr->name = $request['cat_name'];
        $oppr->cat_photo = "oppurtunities/women.jpg";
        $oppr->created_by = $user;
        $oppr->cat_photo = $file_name;
        $oppr->img_name = $img;
        $oppr->aid = session('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $oppr->save();
        return to_route('cat');
    });
});
// Route::get('/s',function(){
//     return session()->all();
// });

ROute::get('/m',function(){
    echo Str::mask('+56 9 87654321', '*', -8, 6);
});