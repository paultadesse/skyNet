<?php

namespace App\Http\Controllers;

use App\Actions\CreateSpeedAction;
use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Http\Resources\SpeedResource;
use App\Models\Speed;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

    public function store(CreateSpeedRequest $request, CreateSpeedAction $createSpeedAction)
    {
        try {

            $speed = $createSpeedAction->create($request);

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
