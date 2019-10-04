<?php

use Illuminate\Http\Request;

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


Route::get('items', 'ItemController@getItems');
Route::get('orders', 'OrderController@getOrders');
Route::post('orders', 'OrderController@createOrder');
Route::get('contacts', 'ContactController@getContacts');
Route::post('contacts', 'ContactController@createContact');

Route::post('test', function(Request $request){
    return response()->json([
        "message" => "test"
    ], 201);
});






