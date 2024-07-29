<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\membreController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChercheurController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NewsController;

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

Route::get('/', function () {
    return view('welcome');
});

// Routes pour les membres
Route::post('/membre/add', [membreController::class, 'addmembre']);
Route::get('/membre/form', [membreController::class, 'ShowFormMembre']);
Route::get('/membre/list', [membreController::class, 'liste']);
Route::get('/membre/delete/{id}', [membreController::class, 'delete']);
Route::get('/membre/update/{id}', [membreController::class, 'formupdate']);
Route::post('/membre/update/traitement', [membreController::class, 'update']);
Route::get('/admin/dashboard','AdminController@dashboard');
Route::get('/chercheur/dashboard','ChercheurController@dashboard');

Route::get('/admin/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/admin/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/admin/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/admin/news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/admin/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
// Routes d'authentification
Auth::routes();

// Routes protégées
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});
Route::middleware(['auth', 'role:director'])->group(function () {
    Route::get('/director', function () {
        return view('director.dashboard');
    });
});

// Route pour le tableau de bord de l'utilisateur connecté
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
