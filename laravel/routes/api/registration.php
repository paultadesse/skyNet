<?php 

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::post('/registration/create', [RegistrationController::class, 'store']);
Route::get('/registrations', [RegistrationController::class, 'index']);