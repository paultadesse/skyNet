<?php

namespace App\Http\Controllers;

// use App\Actions\CreateSpeedAction;
use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Http\Requests\Speed\EditSpeedRequest;
use App\Http\Resources\SpeedResource;
use App\Models\Speed;
use App\Services\SpeedService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SpeedController extends Controller
{
    public function index()
    {
        $speeds = Speed::with('serviceType')->get();

        if($speeds != null)
        {
            
            $speed_resource = SpeedResource::collection($speeds);
            return $speed_resource;

        }else {
            return response()->json([ 'message' => 'No Record Found !']);
        }
    }

    public function update(EditSpeedRequest $request, Speed $speed, SpeedService $speedService)
    {

        $edited_speed = $speedService->update($request, $speed);

        if($edited_speed)
        {
            return response()->json($speed, 200);

        }else {

             return response()->json([ 'message' => 'Record not updated'], abort);
            
        }

    }

    public function store(CreateSpeedRequest $request, SpeedService $speedService)
    {
        try {

            $speed = $speedService->create($request);

        } catch (ModelNotFoundException $e) {
            return response()->json([ 'message' => 'object not found'], 404);
        }

        if($speed->wasRecentlyCreated)
        {
            $speed->load('serviceType');
            $speed_resource = SpeedResource::make($speed);

            return response()->json($speed, 201);
        }else {
            return response()->json([ 'message' => 'some error occured']);
        }
    }
}
