<?php
use App\Http\Controllers\Admin\ProjectController as ProjectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Guest\FrontPage as FrontPage;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[FrontPage::class, 'index'])->name('welcome');

Route::middleware(['auth', 'verified'])
->prefix('admin')
->name('admin.')
->group( function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/projects', ProjectController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
