<?php

use App\Http\Controllers\Inv\DashboardController;
use App\Http\Controllers\Inv\StockController;
use App\Http\Controllers\Pos\PosController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth', 'verified', 'role:akuntan|ketua'])->group(function () {
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/dashboard', 'index');
        //HACK: main route before login implemented
        Route::get('/', 'index');
    });

    Route::controller(StockController::class)->group(function(){
        Route::get('/stock', 'index');
    });

    Route::controller(PosController::class)->group(function(){
        Route::get('/pos', 'index');
    });
// });
