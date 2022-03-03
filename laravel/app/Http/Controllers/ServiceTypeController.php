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
