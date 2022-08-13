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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, 'index'])->name('home');
Route::get('/o-nama', [\App\Http\Controllers\WebsiteController::class, 'about'])->name('about-us');
Route::get('/kontakt', [\App\Http\Controllers\WebsiteController::class, 'contact'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\WebsiteController::class, 'contactSend'])->name('contact.post');
Route::get('/novosti-za-mlade', [\App\Http\Controllers\WebsiteController::class, 'youthNews'])->name('novosti-za-mlade');
Route::get('/blog/{category:slug}', [\App\Http\Controllers\WebsiteController::class, 'youthNews'])->name('blog');
Route::get('/post/{post}', [\App\Http\Controllers\WebsiteController::class, 'single'])->name('single');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
