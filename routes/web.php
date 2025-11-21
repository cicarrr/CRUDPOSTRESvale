<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostreController;

Route::get('/', function () {
    return redirect()->route('postres.index');
});

Route::resource('postres', PostreController::class);
