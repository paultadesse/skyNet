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
        $token_id = $request->user()->currentAccessToken()->id;
        $logged_out = $request->user()->tokens()->where('id', $token_id)->delete();

        /**
         * this will delete all token of the user...
         * $logged_out = $request->user()->tokens()->delete();
         */
        

        return $logged_out;

	}

}