<?php

namespace App\Services;

use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Http\Requests\Speed\EditSpeedRequest;
use App\Models\ServiceType;
use App\Models\Speed;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SpeedService {

	public function create(CreateSpeedRequest $request) : Speed 
	{
		$service_type = ServiceType::find($request['service_type']);

		if(!$service_type){
			throw new ModelNotFoundException();
		}

		$created_speed = $service_type->speeds()->create([
			'speed' => $request['speed'],
			'birr' 	=> $request['birr'],
		]);

		return $created_speed;
	}

	public function update(EditSpeedRequest $request, Speed $speed) : bool
	{

		$speed->fill([
			'speed' => $request->speed,
			'birr'  => $request->birr 
		]);

		$changes = $speed->getDirty();

		$speed->save();

		return count($changes);
	}

}
