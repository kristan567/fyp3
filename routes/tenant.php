<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\App\ProfileController;

use App\Http\Controllers\App\UserController;

use App\Http\Controllers\App\ProjectController;
use App\Http\Controllers\App\CategoryController;
use App\Http\Controllers\App\ChartJSController;
use App\Http\Controllers\App\RecommendController;
use App\Http\Controllers\App\TaskController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return view('app.welcome');
    });


    Route::get('/dashboard', function () {
        return view('App.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::group(['middleware' => ['role:Project Manager']], function () {
            Route::resource('users', UserController::class);
            Route::get('users/{id}/delete',[App\Http\Controllers\App\UserController::class, 'destroy']);  

            Route::resource('projects', ProjectController::class);
            Route::resource('category', CategoryController::class); 
            // Route::get('/projects/layout', [ProjectController::class, 'index'])->name('projects.layout');
           
        });

        Route::group(['middleware' => ['role:worker']], function () {
           

            // Route::resource('category', CategoryController::class);
            // Route::get('/projects/layout', [ProjectController::class, 'index'])->name('projects.layout');
           
        });

        // Define a common middleware group for both roles
        Route::group(['middleware' => ['role:Project Manager|worker']], function () {
            // Route::resource('category', CategoryController::class);


         
            Route::resource('task', TaskController::class);
            Route::get ('tasks/{id}/complete',[App\Http\Controllers\App\TaskController::class, 'complete'])->name('task.complete');
            Route::get('tasks/{id}/showcompleted',[App\Http\Controllers\App\TaskController::class, 'showcompleted'])->name('taskshow');

            Route::get('tasks/{id}/mail',[App\Http\Controllers\App\TaskController::class, 'storeemail']); 

            Route::get('tasks/{id}/usermail',[App\Http\Controllers\App\TaskController::class, 'usermail']); 



            // Route::get('tasks/{id}/image', 'App\Http\Controllers\App\ImageController@index')->name('image.index');

            Route::get('tasks/{id}/upload',[App\Http\Controllers\App\ImageController::class, 'index']);
            Route::post('tasks/{id}/upload',[App\Http\Controllers\App\ImageController::class, 'store']);
            Route::get('tasks/{id}/delete',[App\Http\Controllers\App\ImageController::class, 'destroy']);  
            


            Route::get('dashboard', [ChartJSController::class, 'index',]);
            Route::get('dashboard', [ChartJSController::class, 'index',])->name('App.dashboard');
            // Route::resource('dashboard', ChartJSController::class);
            // Route::get('dashboard', [ChartJSController::class, 'taskindex']);


           
            
            Route::resource('projects', ProjectController::class);
            Route::get ('projects/{id}/complete',[App\Http\Controllers\App\ProjectController::class, 'complete'])->name('project.complete');
            Route::get('/finishedproject',[App\Http\Controllers\App\ProjectController::class, 'showcompleted'])->name('finishedproject');

            Route::resource('recommend',RecommendController::class);


            Route::get('recommend/{id}/show',[App\Http\Controllers\App\RecommendController::class, 'show']); 

       

        });
            
       
    });


    

   
    
    require __DIR__.'/tenant-auth.php';






});
