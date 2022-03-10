<?php 

namespace App\Actions;

use App\Http\Requests\Registration\CreateRegistrationRequest;
use App\Models\Registration;

class CreateRegistrationAction {

	public function create(CreateRegistrationRequest $request) : Registration
	{
		$created_registration = Registration::create([
			'name' 			=> $request['name'],
            'phone_number' 	=> $request['phone_number'],
            'email' 		=> $request['email'], 
            'service_type' 	=> $request['service_type'], 
            'desired_speed' => $request['desired_speed'], 
            'site_location' => $request['site_location'],
            'site_location_not_listed' => $request['site_location_not_listed'],
            'comment' 		=> $request['comment']
		]);

		// i think i can remove the [ if ] block and directly return [ $created_registration ] since it will be checked in the controller

		if ($created_registration->wasRecentlyCreated)
		{
			return $created_registration;	
		}

		return $created_registration;
	}
}