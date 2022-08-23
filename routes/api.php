<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

Route::get('/user', static function (Request $request) {
    return [];
});

Route::resource('users', \App\Http\Controllers\CompanyController::class);

Route::get('health-check', static function () {
    return response()->json(['status' => 'OK', 'timestamp' => Carbon::now()]);
});

Route::fallback(static function () {
    abort(404, 'API resource not found');
});
