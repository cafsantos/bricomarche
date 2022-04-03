<?php

use App\Http\Controllers\Api\V1\Admin\FamilyApiController;
use App\Http\Controllers\Api\V1\Admin\ProductApiController;
use App\Http\Controllers\Api\V1\Admin\StoreApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Store
    Route::apiResource('stores', StoreApiController::class);

    // Product
    Route::post('products/media', [ProductApiController::class, 'storeMedia'])->name('products.store_media');
    Route::apiResource('products', ProductApiController::class);

    // Family
    Route::apiResource('families', FamilyApiController::class);
});
