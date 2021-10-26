<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;

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
    return view('servicios.index');
});
//aki va index

Route::get('/servicios', function () {
    return view('servicios.index');
});

//aki va principal
Route::get('/servicios1', function () {
    return view('servicios.index');
});


Route::get('/servicios2', function () {
    return view('servicios.segundo');
});
Route::get('/servicios3', function () {
    return view('servicios.services');
});
Route::get('/login1', function () {
    return view('auth.login');
});

Route::get('/servicios/create',[ServiciosController::class,'create']);
Route::get('/servicios3',[ServiciosController::class,'index1']);

Route::resource('servicios', ServiciosController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [ServiciosController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){
    //Route::get('/', [ServiciosController::class, 'index'])->name('home');
    return view('servicios.principal');
    });

