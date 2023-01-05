<?php

use App\Http\Livewire\BerandaAdmin;
use App\Http\Livewire\Diagnosa;
use App\Http\Livewire\Gejala;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pengecekan;
use App\Http\Livewire\Relasi;
use App\Http\Livewire\Rule;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Pengunjung;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
//    return view('umum.home');
    return view('umum.home-landing');
})->name('home');
Route::get('/info', function () {
    return view('umum.info');
})->name('info');
Route::get('/pengecekan', Pengecekan::class)->name('pengecekan');
Route::get('/kontak', function () {
    return view('umum.kontak');
})->name('kontak');

Route::get('/landing', function () {
    return view('umum.home-landing');
})->name('home.landing');

Route::get('/pengecekan-new', Pengecekan::class)->name('home.new-pengecekan');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', BerandaAdmin::class)->name('dashboard');
    Route::get('/dashboard-new', Dashboard::class)->name('dashboard-new');
    Route::get('/diagnosa', Diagnosa::class)->name('diagnosa');
    Route::get('/gejala', Gejala::class)->name('gejala');
    Route::get('/relasi', Relasi::class)->name('relasi');
    Route::get('/rule', Rule::class)->name('rule');
    Route::get('/pengunjung', Pengunjung::class)->name('pengunjung');
});


//Route::namespace('Auth')
//    ->group(function () {
//        Route::get('/rule', Rule::class)->name('rule');
//    });
