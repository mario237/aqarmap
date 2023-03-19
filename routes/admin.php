<?php

Route::get('/', function (){
    return redirect()->route('admin.auth.login');
});

Route::group(['prefix' => 'auth' , 'as' => 'auth.'] , function (){
    Route::get('login', [\App\Http\Controllers\Admin\AuthController::class , 'login'])->name('login');
    Route::post('login', [\App\Http\Controllers\Admin\AuthController::class , 'submit'])->name('login.submit');
    Route::post('logout', [\App\Http\Controllers\Admin\AuthController::class , 'logout'])->name('logout');
});

Route::group([ 'middleware' => ['is-admin']] , function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('dashboard');
});
