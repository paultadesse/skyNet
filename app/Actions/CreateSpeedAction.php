<?php 

namespace App\Actions;

use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Models\ServiceType;
use App\Models\Speed;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CreateSpeedAction {

	public function create(CreateSpeedRequest $request) : Speed 
	{
		$service_type = ServiceType::find($request['service_type']);

		if(!$service_type){
			// abort(404);
			throw new ModelNotFoundException();
		}

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