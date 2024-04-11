<?php

use App\Http\Controllers\NewuserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('tenants', TenantController::class);
});

Route::get('/blog', function () {
    return view('landingpage.mainservice');
})->name('mainservice');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/aboutus', function () {
    return view('landingpage.aboutus');
})->name('aboutus');

Route::get('/task', function () {
    return view('landingpage.task');
})->name('task');

Route::get('/recommendation', function () {
    return view('landingpage.recommendation');
})->name('recommendation');

Route::get('/notification', function () {
    return view('landingpage.notification');
})->name('notification');

Route::get('/inventory', function () {
    return view('landingpage.inventory');
})->name('inventory');

Route::get('/dashboardV', function () {
    return view('landingpage.dashboard');
})->name('dashboardV');

Route::get('/blog', function () {
    return view('landingpage.blog');
})->name('blog');

Route::get('/blog2', function () {
    return view('landingpage.blog2');
})->name('blog2');

Route::get('/blog3', function () {
    return view('landingpage.blog3');
})->name('blog3');


Route::get('/contactus', function () {
    return view('landingpage.contactus');
})->name('contactus');

Route::resource('newuser', NewuserController::class)->names([
    'index' => 'newuser.index',
    'create' => 'newuser.create',
    'store' => 'newuser.store',
    'show' => 'newuser.show',
    'edit' => 'newuser.edit',
    'update' => 'newuser.update',
    'destroy' => 'newuser.destroy',
]);


require __DIR__.'/auth.php';
