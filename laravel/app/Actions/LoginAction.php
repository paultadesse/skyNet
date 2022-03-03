<?php 

namespace App\Actions;

use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginAction {

	public function login(LoginRequest $request)
	{
		$user = User::with('roles')->where('email', $request->email)->first();


        if($user && Hash::check($request->password, $user->password)){
            $token = $user->createToken('skynet')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ];

            return $response;
        }

	}

}