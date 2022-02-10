<?php

use App\Models\Opportunities_category;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
})->name('home');

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
        $oppr = new   Opportunities_category;
        $oppr->name = "Gsoc";
        $oppr->cat_photo = "oppurtunities/women.jpg";
        $oppr->created_by = "Testing  2";
        $oppr->aid = 203 + 1;
        $oppr->save();
        return  response()->json(["Message" => 'success']);
    });
});
