<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('home')->middleware('active');
Route::get('/o-nama', [\App\Http\Controllers\WebsiteController::class, 'about'])->name('about-us')->middleware('active');
Route::get('/kontakt', [\App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact')->middleware('active');
Route::post('/contact', [\App\Http\Controllers\WebsiteController::class, 'contactSend'])->name('contact.post')->middleware('active');
Route::get('/novosti-za-mlade', [\App\Http\Controllers\WebsiteController::class, 'youthNews'])->name('novosti-za-mlade')->middleware('active');
Route::get('/blog/{category:slug}', [\App\Http\Controllers\WebsiteController::class, 'youthNews'])->name('blog')->middleware('active');
Route::get('/post/{post}', [\App\Http\Controllers\WebsiteController::class, 'single'])->name('single')->middleware('active');

Route::get('/inactive',function (){
    if (app(\App\Settings\GeneralSettings::class)->site_active)
        return redirect('/');
    return view('inactive');
});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
