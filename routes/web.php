<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

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
    return view('auth.login');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/post', [AdminController::class, 'post'])->name('post');

Route::get('/listpost', [AdminController::class, 'listPost'])->name('listPost');

Route::get('/post', [AdminController::class, 'post'])->name('post');
Route::get('/create-post', [AdminController::class, 'createPost'])->name('createPost'); 
Route::post('/store-post', [AdminController::class, 'storePost'])->name('storePost');

Route::get('/tambah-berita', [AdminController::class, 'tambahBerita'])->name('tambahBerita');
Route::get('/edit-berita', [AdminController::class, 'editBerita'])->name('editBerita');
//Route::get('/berita', [AdminController::class, 'Berita'])->name('Berita');

// Route::post('/upload-image', 'AdminController@uploadImage')->name('upload.image');
//Route::get('/tambah-data', 'AdminController@tambahData')->name('tambah.data');
// Route::get('/edit/{id}', 'AdminController@edit')->name('edit.data');
// Route::put('/update/{id}', 'AdminController@update')->name('update.data');
// Route::get('/admin', 'AdminController@index'); // Contoh route untuk AdminController




