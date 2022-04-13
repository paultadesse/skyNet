<?php 

use App\Http\Controllers\SpeedController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum']], function () {
	Route::post('/speed/create', [SpeedController::class, 'store']);
	Route::put('/speed/{speed}/edit', [SpeedController::class, 'update']);
});
Route::get('/speed', [SpeedController::class, 'index']);