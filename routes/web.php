<?php

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

Route::get('/lab-services', function () {
    return view('lab-services');
});

Route::get('/lab-tests', function () {
    return view('lab-tests');
});


Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/medicals', function () {
    return view('medicals');
});

Route::get('/partners', function () {
    return view('partners');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
