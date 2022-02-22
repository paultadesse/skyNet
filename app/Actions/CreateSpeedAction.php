<?php 

namespace App\Actions;

use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Models\ServiceType;
use App\Models\Speed;

class CreateSpeedAction {

	public function create(CreateSpeedRequest $request) : Speed 
	{
		$service_type = ServiceType::find(1);

		$created_speed = $service_type->speeds()->create([
			'speed' => $request['speed'],
			'birr' => $request['birr'],
		]);

		if($created_speed->wasRecentlyCreated)
		{
			return $created_speed;
		}

		return $created_speed;
	}

}