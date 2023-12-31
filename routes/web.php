<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EmployeeController;
//spatie
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

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
Route::get('registers', function () {
    return view('register');
});
Route::resource('registers', RegisterController::class);
Route::resource('employee', EmployeeController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/exportexcel', [App\Http\Controllers\RegisterController::class, 'exportexcel'])->name('exportexcel');

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
});