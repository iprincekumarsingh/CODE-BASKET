    <?php

    use App\Http\Controllers\Controller;
    use App\Http\Controllers\OpportunitiesCategoryController;
    use App\Http\Controllers\OppurtunitiesController;
    use App\Http\Controllers\ProjectCategoryController;
    use App\Http\Controllers\ProjectController;
    use App\Http\Controllers\WebController;

    use Illuminate\Support\Facades\Route;

    // Frontend Controller for DataFetching and routing
    Route::get('/', [WebController::class, 'index'])->name('web.home');
    Route::get('test', [WebController::class, 'test']);
    Route::get('/explore', [WebController::class, 'explore']);
    Route::get('/team', [WebController::class, 'team']);
    Route::get('/explore-content/{id}/{pageno?}', [WebController::class, 'exploreSeacrh'])->name('web.explore');
    Route::get('/women/{id}/{pageno?}', [WebController::class, 'womensearch'])->name('women.explore');

    Route::get('/content/{id}', [WebController::class, 'readmore'])->name('read.more');
    ROute::post('/news', [WebController::class, 'newsLetter'])->name('newsletter');
    //  END----  Frontend Controller for DataFetching and routing  --- END

    // Route::get('/welcome', [Controller::class, 'home'])->name('home');

    Route::middleware(['auth', 'verified'])->group(function () {
        // Dashboard View with Contrller Class
        Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
        // For creating Category for Oppurtunities to delete,create,read

        Route::get('/add_category', [OpportunitiesCategoryController::class, 'create'])->name('oppurtunity_cat.create');
        Route::post('/add_category', [OpportunitiesCategoryController::class, 'store'])->name('oppurtunity_cat.store');
        Route::get('/category_delete/{id}', [OpportunitiesCategoryController::class, 'destroy'])->name('oppurtunity_cat.delete');
        Route::post('/uloadopr', [OppurtunitiesController::class, 'store'])->name('oppurtunity.store');

        //    This controller used to see the Pending Approval of the user to Approve it and all short of regarding games,learn by fun
        Route::get('/oppurtunites', [OppurtunitiesController::class, 'create'])->name('oppurtunity.create');
        Route::get('/approval', [OppurtunitiesController::class, 'approval'])->name('approval');
        Route::post('/approve/{id}', [OppurtunitiesController::class, 'approve'])->name('route.approve');
        Route::post('/disapprove/{id}', [OppurtunitiesController::class, 'disapprove'])->name('route.disapprove');
        Route::post('/deleteoppurtunity/{id}', [OppurtunitiesController::class, 'destroy'])->name('oppur.destroy');

        // ProjectCategory Controller  for all type of opeation
        Route::post('/proc_store', [ProjectCategoryController::class, 'store'])->name('projectCa.store');
        Route::get('/project_c_create', [ProjectCategoryController::class, 'index'])->name('projectCa.create');
        Route::get('/project_c_delete/{id}', [ProjectCategoryController::class, 'destroy'])->name('projectCa.destroy');

        Route::get('/project_create', [ProjectController::class, 'index'])->name('project_index');
        Route::post('/project_create', [ProjectController::class, 'store'])->name('project_store');
        
    });
