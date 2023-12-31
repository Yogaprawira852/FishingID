<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\userController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/item/{id}', [HomeController::class, 'showItem'])->name('item.show');
Route::get('/login', function () {
    return view('login.index');
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


//admin
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/admin/itemManagement', [AdminController::class, 'item']);
    Route::get('/admin/item/create', [AdminController::class, 'create']);
    Route::put('/admin/item/store', [AdminController::class, 'store'])->name('admin.item.store');
    Route::delete('/admin/item/{id}', [AdminController::class, 'destroy'])->name('admin.item.destroy');
    Route::get('/admin/item/{id}/edit', [AdminController::class, 'edit'])->name('admin.item.edit');
    Route::put('/admin/item/{id}', [AdminController::class, 'update'])->name('admin.item.update');
});

// user
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index']);
});

// api login github
Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('auth/github/redirect', [GithubController::class, 'redirect'])->name('github.login');
Route::get('auth/github/callback', [GithubController::class, 'callback'])->name('github.callback');

