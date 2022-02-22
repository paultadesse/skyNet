<?php 

use App\Http\Controllers\ServiceTypeController;
use Illuminate\Support\Facades\Route;

Route::post('/service-type/create', [ServiceTypeController::class, 'store']);
Route::get('/service-types', [ServiceTypeController::class, 'index']);