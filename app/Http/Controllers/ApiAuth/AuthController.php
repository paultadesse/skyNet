<?php

namespace App\Http\Controllers\ApiAuth;

use App\Actions\LoginAction;
use App\Actions\LogoutAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\LogoutRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request, LoginAction $loginAction)
    {
        $valid_user = $loginAction->login($request);

        if($valid_user != null)
        {
            return $valid_user;
        }else {
            return response()->json([ 'message' => 'Credentials are incorrect !']);
        }

    }

    public function logout(LogoutRequest $request, LogoutAction $logoutAction)
    {

        $logout = $logoutAction->logout($request);

        if($logout)
        {
            return $logout;
        }else {
            return response()->json(['error' => 'Unauthenticated !'], 401);
        }

    }
}
