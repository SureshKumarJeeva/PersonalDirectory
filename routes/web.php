<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;

Route::get('/home', function () {
    return Inertia::render('Home', ['title' => 'Home']);
});

Route::get('/finance', function () {
    return Inertia::render('Finance', ['title' => 'Finance']);
});


Route::get('/financeitems', [FinanceController::class, 'index']);