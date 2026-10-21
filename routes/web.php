<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('kancelaria', [NavbarController::class, 'kancelaria'])->name('kancelaria');
Route::get('krst', [NavbarController::class, 'krst'])->name('krst');
Route::get('oznamy', [NavbarController::class, 'oznamy'])->name('oznamy');
Route::get('birmovanie', [NavbarController::class, 'birmovanie'])->name('birmovanie');
Route::get('manzelstvo', [NavbarController::class, 'manzelstvo'])->name('manzelstvo');
Route::get('pohreb', [NavbarController::class, 'pohreb'])->name('pohreb');
Route::get('spovedanie', [NavbarController::class, 'spovedanie'])->name('spovedanie');
Route::get('kontakt', [NavbarController::class, 'kontakt'])->name('kontakt');
Route::get('aktuality', [NavbarController::class, 'aktuality'])->name('aktuality');
Route::get('dane', [NavbarController::class, 'dane'])->name('dane');

Route::get('pridaj_aktualitu', [AdminController::class, 'pridaj_aktualitu'])->name('pridaj_aktualitu');
Route::post('potvrdAktualitu', [AdminController::class, 'potvrdAktualitu'])->name('potvrdAktualitu');
Route::get('pridaj_oznamy', [AdminController::class, 'pridaj_oznamy'])->name('pridaj_oznamy');
Route::post('potvrdOznamy', [AdminController::class, 'potvrdOznamy'])->name('potvrdOznamy');
Route::get('pridaj_vynimku', [AdminController::class, 'pridaj_vynimku'])->name('pridaj_vynimku');
Route::post('potvrdVynimku', [AdminController::class, 'potvrdVynimku'])->name('potvrdVynimku');
Route::get('zmazVynimku/{id}', [AdminController::class, 'zmaz_vynimku'])->name('zmaz_vynimku');
Route::get('zmazAktualitu/{id}', [AdminController::class, 'zmaz_aktualitu'])->name('zmaz_aktualitu');
Route::get('uprav_aktualitu/{id}', [AdminController::class, 'uprav_aktualitu'])->name('uprav_aktualitu');
Route::post('potvrdUpravenieAktuality/{id}', [AdminController::class, 'potvrdUpravenieAktuality'])->name('potvrdUpravenieAktuality');
Route::get('zmazOznamy/{id}', [AdminController::class, 'zmaz_oznamy'])->name('zmaz_oznamy');
Route::get('uprav_oznamy/{id}', [AdminController::class, 'uprav_oznamy'])->name('uprav_oznamy');
Route::post('potvrdUpravenieOznamov/{id}', [AdminController::class, 'potvrdUpravenieOznamov'])->name('potvrdUpravenieOznamov');

require __DIR__.'/auth.php';
