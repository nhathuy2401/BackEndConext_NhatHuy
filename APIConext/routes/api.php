<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('users', User\UserController::class);

Route::resource('homes', 'Home\HomeController', ['only' => ['index', 'show']]);

Route::resource('event', 'Event\EventController', ['only' => ['index', 'show']]);

Route::resource('vouchers', 'Voucher\VoucherController', ['only' => ['index', 'show']]);

Route::resource('workplaces', 'Workplace\WorkplaceController', ['only' => ['index', 'show']]);

Route::resource('contacts', Contact\ContactController::class , ['only' => ['show', 'index']]);




