<?php

use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\readBook;
use App\Http\Controllers\fileReader;
use Illuminate\Support\Facades\Auth;

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

Route::group(['prefix' => 'manage', 'as' => 'manage'],
    function () {
        Route::resource('/', DocumentController::class);
    });



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/reading', [readBook::class, 'index'])->name('reading');
Route::resource('/contactus', ContactusController::class);
Route::get('/read/{name}', [fileReader::class, 'readbook'])->name('readbook');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
       // return view('dashboard');
       return redirect('reading');
    })->name('dashboard');
});
