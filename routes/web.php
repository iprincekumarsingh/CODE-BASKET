<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OpportunitiesCategoryController;
use App\Http\Controllers\OppurtunitiesController;
use App\Http\Controllers\ProjectController;
use App\Models\Opportunitie;
use App\Models\Opportunities_category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Jetstream\Rules\Role;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', [Controller::class, 'home'])->name('home');
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        $catid = Opportunities_category::select('op_id', 'name')->get();
        $ccuser = User::select('id')->get();
        $project = Project::select('project_id')->get();
        $game = Opportunitie::where('op_id', 2)
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
    })->name('dashboard');

    // For creating Category for Oppurtunities,
    Route::get('/add_category', [OpportunitiesCategoryController::class, 'create'])->name('oppurtunity_cat.create');
    Route::post('/add_category', [OpportunitiesCategoryController::class, 'store'])->name('oppurtunity_cat.store');
    Route::get('/category_delete/{id}', [OpportunitiesCategoryController::class, 'destroy'])->name('oppurtunity_cat.delete');
    Route::post('/uloadopr', [OppurtunitiesController::class, 'store'])->name('oppurtunity.store');


    // Project Controller for uploading project & viewing the project 
    Route::get('/create', [ProjectController::class, 'store'])->name('project.create');
    Route::post('/store', [ProjectController::class, 'create'])->name('project.store');
    Route::get('/oppurtunites', [OppurtunitiesController::class, 'create'])->name('oppurtunity.create');
    Route::get('/approval', [Controller::class, 'approval'])->name('approval');
});
Route::get('/view_category/{name}/{id}/{ff}/{df}', function ($name, $id, $d, $ss) {
    $find = Opportunitie::where('op_id', $id)->get();
    if ($find == null) {
        echo "No data Found";
    } else {

        return response()->json([$find]);
    }
});
