<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('index');
});

// Route::controller(Controller::class)->prefix('page')->group(function(){
//     Route::get('/home', 'index')->name('home');
// });