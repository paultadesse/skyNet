<?php 

namespace App\Actions;

use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Models\ServiceType;
use App\Models\Speed;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CreateSpeedAction {

	/**
	 * 
	 * 
	 *  This class is no longer in use [ i replace it with service class instead :to handle more methods: ]
	 * 
	 * 
	 * 
	 * */

	public function create(CreateSpeedRequest $request) : Speed 
	{
		$service_type = ServiceType::find($request['service_type']);

		if(!$service_type){
			throw new ModelNotFoundException();
		}

		$created_speed = $service_type->speeds()->create([
			'speed' => $request['speed'],
			'birr' => $request['birr'],
		]);

		// i think i can remove the [ if ] block and directly return [ $created_speed ] since it will be checked in the controller

		if($created_speed->wasRecentlyCreated)
		{
			return $created_speed;
		}

		return $created_speed;
	}

}