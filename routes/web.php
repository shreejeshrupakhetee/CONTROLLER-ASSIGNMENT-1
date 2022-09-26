<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller1;
use App\Http\Controllers\newcontroller2;


Route::view('/', 'home');
Route::middleware('guest')->group(function () {
});
Route::get('/welcome', function () {
    return view('hello');
});
Route::prefix('product')->group(function () {
    Route::resource('controller1',newcontroller1::class);
    Route::resource('controller2',newcontroller2::class);
});
Route::get('create', [Controller::class, 'create'])->name('newmodel.create');
Route::post('store', [Controller::class, 'store'])->name('newmodel.store');
Route::get('index', [Controller::class, 'index'])->name('newmodel.index');
Route::get('view/{id}', [Controller::class, 'show'])->name('newmodel.show');
Route::get('edit/{id}', [Controller::class, 'edit'])->name('newmodel.edit');
Route::put('update/{id}', [Controller::class, 'update'])->name('newmodel.update');
Route::delete('destroy/{id}', [Controller::class, 'destroy'])->name('newmodel.destroy');
