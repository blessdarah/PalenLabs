<?php

use App\Http\Controllers\PagesController;
use Illuminate\Contracts\Session\Session;
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
Route::get('/change-lang', function(){
    if(app()->getLocale() == 'en' || app()->getLocale() == null) {
        session(['language' => 'fr']);
    }else {
        session(['language' => 'en']);
    }
    return redirect()->back()->with('language', session('language'));
})->middleware('language');

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/lab-services', 'labServices');
    Route::get('/lab-services/{id}', 'showLabService')->name('pages.labServices.show');
    Route::get('/doctors', 'doctors');
    Route::get('/partners', 'partners');
    Route::get('/about-us', 'aboutUs');
    Route::get('/careers', 'careers')->name('pages.careers');
})->middleware('language');

require __DIR__ . '/auth.php';
