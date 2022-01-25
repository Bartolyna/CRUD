<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActaController; //Se hace referencia al controlador

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
    //return view('welcome');
    return view('auth.login');
});
/* 
Route::get('/acta', function () {
    return view('acta.index');
});

Route::get('/acta/create', [ActaController::class, 'create']);
 */

 Route::resource('acta', ActaController::class);
 Auth::routes();

 Route::get('/home', [ActaController::class, 'index'])->name('home');

 Route::prefix(['middleware' => 'auth'], function() {
     
    Route::get('/', [HomeController::class, 'index'])->name('home');

 });
