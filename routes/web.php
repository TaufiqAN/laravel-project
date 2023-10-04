<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\NewsController;
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

Route::get('info', function () {
    echo 'info';
});

Route::get('register', function () {
    echo '<button>register</button>';
});

Route::get('/show', [NewsController::class, 'show']);

Route::get('/create', [NewsController::class, 'create']);

Route::get('/user/{id}', [CobaController::class, 'sepuh'])->name('user.profile');