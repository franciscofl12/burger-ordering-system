<?php

use App\Http\Controllers\BurgerOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('order');
});

Route::post('/order', [BurgerOrderController::class, 'store'])->name('order');

Route::get('/admin/orders', [BurgerOrderController::class, 'index'])->name('admin.orders');
