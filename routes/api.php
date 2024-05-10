<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\InvoiceItemsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::apiResource('products', ProductController::class);
Route::apiResource('invoices', InvoicesController::class);
Route::apiResource('invoice_details', InvoiceItemsController::class);