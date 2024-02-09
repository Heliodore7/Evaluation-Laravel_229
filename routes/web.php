<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/connexion',[AuthController::class,'get_connexion'])->name('get-login');
Route::post('/connexion,',[AuthController::class,'connexion'])->name('login');
Route::get('/inscription',[AuthController::class,'get_inscription'])->name('get-register');
Route::post('/inscription,',[AuthController::class,'insription'])->name('register');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/',[HomeController::class,'inscription']);
