<?php 

namespace App\Actions;

use App\Http\Requests\User\LogoutRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LogoutAction {

	public function logout(LogoutRequest $request) 
	{
		/**
         * Revoke a specific token...
         */

        $logged_out = $request->user()->tokens()->delete();

        return $logged_out;

	}

}