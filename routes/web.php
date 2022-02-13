<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OpportunitiesCategoryController;
use App\Http\Controllers\OppurtunitiesController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WebController;

use Illuminate\Support\Facades\Route;

ROute::get('/',function(){
    return "Working on Heroku";
});
Route::get('/', [WebController::class, 'index']);
// Route::get('/welcome', [Controller::class, 'home'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard View with Contrller Class
    Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
    // For creating Category for Oppurtunities,
    Route::get('/add_category', [OpportunitiesCategoryController::class, 'create'])->name('oppurtunity_cat.create');
    Route::post('/add_category', [OpportunitiesCategoryController::class, 'store'])->name('oppurtunity_cat.store');
    Route::get('/category_delete/{id}', [OpportunitiesCategoryController::class, 'destroy'])->name('oppurtunity_cat.delete');
    Route::post('/uloadopr', [OppurtunitiesController::class, 'store'])->name('oppurtunity.store');

    // OPPurtunities Controller  
    Route::get('/oppurtunites', [OppurtunitiesController::class, 'create'])->name('oppurtunity.create');
    Route::get('/approval', [Controller::class, 'approval'])->name('approval');

    Route::post('/approve/{id}', [OppurtunitiesController::class, 'approve'])->name('route.approve');
    Route::post('/disapprove/{id}', [OppurtunitiesController::class, 'disapprove'])->name('route.disapprove');
    Route::post('/deleteoppurtunity/{id}', [OppurtunitiesController::class, 'destroy'])->name('oppur.destroy');

    // Project Controller for uploading project & viewing the project 
    Route::post('/proc_store', [ProjectCategoryController::class, 'store'])->name('projectCa.store');
    Route::get('/project_c_create', [ProjectCategoryController::class, 'index'])->name('projectCa.create');
    Route::get('/project_c_delete/{id}', [ProjectCategoryController::class, 'destroy'])->name('projectCa.destroy');

    // Project Controller 
    Route::get('/project_create', [ProjectController::class, 'index'])->name('project_index');
    Route::post('/project_create', [ProjectController::class, 'store'])->name('project_store');
});
