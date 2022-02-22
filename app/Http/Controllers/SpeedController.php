<?php

namespace App\Http\Controllers;

use App\Actions\CreateSpeedAction;
use App\Http\Requests\Speed\CreateSpeedRequest;
use App\Http\Resources\SpeedResource;
use App\Models\Speed;
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

    public function store(CreateSpeedRequest $request, CreateSpeedAction $createSpeedAction)
    {
        $speed = $createSpeedAction->create($request);

        if($speed->wasRecentlyCreated)
        {
            return response()->json($speed, 201);
        }else {
            return response()->json([ 'message' => 'some error occured']);
        }
    }
}
