<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RentedItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('store-item', [ItemController::class, 'storeItem']);
Route::get('get-items', [ItemController::class, 'getItems']);
Route::get('get-item/{item_id}', [ItemController::class, 'getItem']);
Route::patch('update-item/{item_id}', [ItemController::class, 'updateItem']);
Route::delete('delete-item/{item_id}', [ItemController::class, 'deleteItem']);

Route::get('fetch-rental-stat/from/{from_date}/to/{to_date}', [RentedItemController::class, 'fetchRentalStat']);
