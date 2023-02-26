<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElectronicController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\KullaniciController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
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

//Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'index'])->name('login_form');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'registerCreate'])->name('admin_register_create');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout')->middleware('admin');
});

//#Admin Routes

Route::get('/', function () {
    return view('home_page');
});

Route::prefix('user')->group(function () {
    Route::get('/electronics', [ElectronicController::class, 'show'])->name('user_electronics');
    Route::get('/fashion', [FashionController::class, 'show'])->name('user_fashion');
    Route::get('/jewelry', [JewelryController::class, 'show'])->name('user_jewelry');
    Route::get('/register', [KullaniciController::class, 'register'])->middleware('guest');
    Route::post('/register', [KullaniciController::class, 'store'])->middleware('guest');
    Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
    Route::get('/login', [KullaniciController::class, 'login'])->middleware('guest');
    Route::post('/login', [KullaniciController::class, 'checkDB'])->middleware('guest');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';