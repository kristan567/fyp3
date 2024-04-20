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
use App\Http\Controllers\App\CommentController;
use App\Http\Controllers\App\EquipmentController;
use App\Http\Controllers\App\MaterialController;
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
            Route::get('users/{id}/delete', [App\Http\Controllers\App\UserController::class, 'destroy']);
            Route::get('users/{id}/complete', [App\Http\Controllers\App\UserController::class, 'complete'])->name('user.complete');

            Route::resource('projects', ProjectController::class);
            Route::resource('category', CategoryController::class);
            // Route::get('/projects/layout', [ProjectController::class, 'index'])->name('projects.layout');
            Route::resource('materials', MaterialController::class);

            Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
            Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');
            Route::post('/materials/store', [MaterialController::class, 'store'])->name('materials.store');
            Route::get('/materials/{id}/edit', [MaterialController::class, 'edit'])->name('materials.edit');
            Route::delete('/materials/{id}', [MaterialController::class, 'destroy'])->name('materials.destroy');


            Route::resource('equipments', EquipmentController::class);
            Route::get('/equipments', [EquipmentController::class, 'index'])->name('equipments.index');
            Route::post('/equipments/store', [EquipmentController::class, 'store'])->name('equipments.store');
            Route::get('/equipments/create', [EquipmentController::class, 'create'])->name('equipments.create');
            Route::get('/equipments/{id}/edit', [EquipmentController::class, 'edit'])->name('equipments.edit');
            Route::put('/equipments/{id}/update', [EquipmentController::class, 'update'])->name('equipments.update');
            Route::delete('/equipments/{id}', [EquipmentController::class, 'destroy'])->name('equipments.destroy');


            Route::get('/export_task_pdf/{id}', [TaskController::class,'pdf'])->name('export_task_pdf');
            Route::get('/export_project_pdf', [ProjectController::class,'pdf'])->name('export_project_pdf');
            Route::get('/export_user_pdf', [UserController::class,'pdf'])->name('export_user_pdf');
            Route::get('/export_material_pdf', [MaterialController::class,'pdf'])->name('export_material_pdf');
            Route::get('/export_equipment_pdf', [EquipmentController::class,'pdf'])->name('export_equipment_pdf');
            


            Route::get('taskimage/{id}/verified', [App\Http\Controllers\App\ImageController::class, 'complete'])->name('taskimage.complete');

            Route::get('taskimage/{id}/mail', [App\Http\Controllers\App\ImageController::class, 'storeemail']);

        });

        

        Route::group(['middleware' => ['role:worker']], function () {


            // Route::resource('category', CategoryController::class);
            // Route::get('/projects/layout', [ProjectController::class, 'index'])->name('projects.layout');

        });

        // Define a common middleware group for both roles
        Route::group(['middleware' => ['role:Project Manager|worker']], function () {
            // Route::resource('category', CategoryController::class);


           
            Route::resource('task', TaskController::class);
            Route::get('task/{id}/create', [TaskController::class, 'create']);

            Route::put('task/{id}/userupdate', [TaskController::class, 'userupdate'])->name('task.userupdate');


            Route::get('tasks/{id}/complete', [App\Http\Controllers\App\TaskController::class, 'complete'])->name('task.complete');
            Route::get('tasks/{id}/showcompleted', [App\Http\Controllers\App\TaskController::class, 'showcompleted'])->name('taskshow');

            Route::get('tasks/{id}/mail', [App\Http\Controllers\App\TaskController::class, 'storeemail']);

            Route::get('tasks/{id}/usermail', [App\Http\Controllers\App\TaskController::class, 'usermail']);

    


            

            // Route::get('tasks/{id}/image', 'App\Http\Controllers\App\ImageController@index')->name('image.index');

            Route::get('tasks/{id}/upload', [App\Http\Controllers\App\ImageController::class, 'index']);
            Route::post('tasks/{id}/upload', [App\Http\Controllers\App\ImageController::class, 'store']);
            Route::get('tasks/{id}/delete', [App\Http\Controllers\App\ImageController::class, 'destroy']);
            Route::get('tasks/{id}/show', [App\Http\Controllers\App\ImageController::class, 'back']);



            Route::get('dashboard', [ChartJSController::class, 'index',]);
            // Route::get('dashboard/ {id}/ show', [ChartJSController::class, 'index',]);
            Route::get('dashboard', [ChartJSController::class, 'index',])->name('App.dashboard');
            // Route::resource('dashboard', ChartJSController::class);
            // Route::get('dashboard', [ChartJSController::class, 'taskindex']);




            Route::resource('projects', ProjectController::class);
            Route::get('projects/{id}/complete', [App\Http\Controllers\App\ProjectController::class, 'complete'])->name('project.complete');
            Route::get('/finishedproject', [App\Http\Controllers\App\ProjectController::class, 'showcompleted'])->name('finishedproject');

            // Route::get('recommend', [RecommendController::class,'filterData'])->name('recommend');
            Route::resource('recommend', RecommendController::class);

            // Route::get('/recommend/filter', [RecommendController::class, 'filterData'])->name('recommend.filter');

            Route::get('recommend/{id}/show', [App\Http\Controllers\App\RecommendController::class, 'show']);


            Route::post('comments', [CommentController::class, 'store']);
            

          

        });
    });






    require __DIR__ . '/tenant-auth.php';
});
