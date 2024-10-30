<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\InventoryController;

// Apply middleware for authentication
// Route::middleware(['auth:api'])->group(function () {

//     // Resource routes for Products
// });

Route::apiResource('products', ProductController::class);

Route::get('/categories/{id}/products', [ProductController::class, 'getProductsByCategory']);

// Resource routes for Categories
Route::apiResource('categories', CategoryController::class);

// Resource routes for Orders
Route::apiResource('orders', OrderController::class);

// Resource routes for Inventory
Route::apiResource('inventory', InventoryController::class);
// Home route (optional)
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the eCommerce API']);
});