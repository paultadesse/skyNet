<?php 

use App\Http\Controllers\ApiAuth\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/user/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']], function () {
	Route::post('/user/logout', [AuthController::class, 'logout']);
});