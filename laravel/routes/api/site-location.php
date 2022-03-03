<?php 

use App\Http\Controllers\SiteLocationController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum']], function () {
	Route::post('/site-location/create', [SiteLocationController::class, 'store']);
});
Route::get('/site-locations', [SiteLocationController::class, 'index']);