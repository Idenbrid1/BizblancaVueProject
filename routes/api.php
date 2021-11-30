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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {   
    return $request->user();
});


Route::get('user/verify/{token}', [App\Http\Controllers\Admin\AuthenticationController::class, 'verifyUser']);
Route::get('reset-password/{user_id}/{token}', [App\Http\Controllers\Admin\AuthenticationController::class, 'resetPasswordForm']);
Route::get('/download-invoice/{order_id}', [App\Http\Controllers\Company\CompanyController::class, 'downloadInvoice']);
