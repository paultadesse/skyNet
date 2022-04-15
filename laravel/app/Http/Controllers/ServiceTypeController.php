<?php

namespace App\Http\Controllers;

use App\Actions\CreateServiceTypeAction;
use App\Http\Requests\ServiceType\CreateServiceTypeRequest;
use App\Http\Resources\ServiceTypeResource;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function index()
    {
        $service_types = ServiceType::with('speeds')->get();

        /**
         * using join instead of Eloquent -- For performance - for now it's okay but in the future i might need this..
         * 
         * $service_types = ServiceType::select(['service_types.*', 'speeds.birr as speed_birr'])
         * ->join('speeds', 'service_types.id', '=', 'speeds.service_type_id')
         * ->orderBy('speeds.birr')
         * ->get();
         * 
         * */
        
        if($service_types != null)
        {
            $service_types_resource = ServiceTypeResource::collection($service_types);
            return $service_types_resource;

        }else {
            return response()->json([ 'message' => 'No Record Found !']);
        }

    }

    public function store(CreateServiceTypeRequest $request, CreateServiceTypeAction $createServiceTypeAction)
    {
        $service_type = $createServiceTypeAction->create($request);

        if($service_type->wasRecentlyCreated)
        {
            $service_type->load('speeds');
            $service_type_resource = ServiceTypeResource::make($service_type);
            return response()->json($service_type_resource, 201);
        }else{
            return response()->json([ 'message' => 'some error occured']);
        }
    }

}
