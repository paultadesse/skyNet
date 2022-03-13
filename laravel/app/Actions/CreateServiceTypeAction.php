<?php 

namespace App\Actions;

use App\Http\Requests\ServiceType\CreateServiceTypeRequest;
use App\Models\ServiceType;

class CreateServiceTypeAction {

	public function create(CreateServiceTypeRequest $request) : ServiceType
	{
		$created_service_type = ServiceType::create([
			'name' => $request['name']
		]);

		// i think i can remove the [ if ] block and directly return [ $created_service_type ] since it will be checked in the controller

		if($created_service_type->wasRecentlyCreated)
		{
			return $created_service_type;
		}

		return $created_service_type;
	}

}