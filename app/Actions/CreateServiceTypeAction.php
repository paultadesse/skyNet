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

		if($created_service_type->wasRecentlyCreated)
		{
			return $created_service_type;
		}

		return $created_service_type;
	}

}