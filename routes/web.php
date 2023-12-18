<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    return redirect(app()->getLocale() ?? 'en');
});

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('language')
    ->group(function(){
        Route::controller(PagesController::class)->group(function () {
            Route::get('/', 'index')->name('pages.index');
            Route::get('/lab-services', 'labServices')->name('pages.labServices');
            Route::get('/lab-services/{id}', 'showLabService')->name('pages.labServices.show');
            Route::get('/doctors', 'doctors')->name('pages.doctors');
            Route::get('/partners', 'partners')->name('pages.partners');
            Route::get('/about-us', 'aboutUs')->name('pages.aboutUs');
            Route::get('/careers', 'careers')->name('pages.careers');
        });
});

require __DIR__ . '/auth.php';
