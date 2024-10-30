<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\InventoryController;

// Home route
Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the eCommerce API']);
});

// Product Routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']); // Get all products
    Route::get('/{id}', [ProductController::class, 'show']); // Get a specific product
    Route::post('/', [ProductController::class, 'store']); // Create a new product
    Route::put('/{id}', [ProductController::class, 'update']); // Update a product
    Route::delete('/{id}', [ProductController::class, 'destroy']); // Delete a product
});

// Category Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']); // Get all categories
    Route::get('/{id}', [CategoryController::class, 'show']); // Get a specific category
    Route::post('/', [CategoryController::class, 'store']); // Create a new category
    Route::put('/{id}', [CategoryController::class, 'update']); // Update a category
    Route::delete('/{id}', [CategoryController::class, 'destroy']); // Delete a category
});

// Order Routes
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index']); // Get all orders
    Route::get('/{id}', [OrderController::class, 'show']); // Get a specific order
    Route::post('/', [OrderController::class, 'store']); // Create a new order
    Route::put('/{id}', [OrderController::class, 'update']); // Update an order
    Route::delete('/{id}', [OrderController::class, 'destroy']); // Delete an order
});

// Inventory Routes
Route::prefix('inventory')->group(function () {
    Route::get('/', [InventoryController::class, 'index']); // Get inventory items
    Route::get('/{id}', [InventoryController::class, 'show']); // Get specific inventory item
    Route::post('/', [InventoryController::class, 'store']); // Add new inventory item
    Route::put('/{id}', [InventoryController::class, 'update']); // Update inventory item
    Route::delete('/{id}', [InventoryController::class, 'destroy']); // Delete inventory item
});