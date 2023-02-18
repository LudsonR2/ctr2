<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Jobs\SendTag;

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
Auth::routes();


Route::get('/', function () {
    return view('vendor/adminlte/auth/login');
});

Route::get('/register', function() {
    //return redirect('/login');
    return view('vendor/adminlte/auth/register');
});

Route::get('/login', function() {
    return view('vendor/adminlte/auth/login');
});

Route::get('/password/reset', function() {
    return view('vendor/adminlte/auth/passwords/email');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\UplistaController::class, 'index'])->name('home');
Route::get('/uplista', [App\Http\Controllers\UplistaController::class, 'index'])->name('uplista');

Route::post('/uplista' , [App\Http\Controllers\UplistaController::class, 'pegaArquivo']);

Route::get('/exclusao', [App\Http\Controllers\ExclusaoController::class, 'exclusao'])->name('exclusao');
Route::get('/upevento', [App\Http\Controllers\UpeventoController::class, 'index'])->name('upevento');
Route::post('/upevento', [App\Http\Controllers\UpeventoController::class, 'pegaEvento'])->name('pegaEvento');
Route::get('/config', [App\Http\Controllers\ConfigController::class, 'index'])->name('config');



