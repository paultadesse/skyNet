<?php

namespace App\Http\Controllers;

use App\Actions\CreateSiteLocationAction;
use App\Http\Requests\SiteLocation\CreateSiteLocationRequest;
use App\Http\Resources\SiteLocationResource;
use App\Models\SiteLocation;
use Illuminate\Http\Request;

class SiteLocationController extends Controller
{
    public function index()
    {
        $site_locations = SiteLocation::all();

        if($site_locations != null)
        {

            $site_location_resource = SiteLocationResource::collection($site_locations);
            return $site_location_resource;

        }else {
            return response()->json([ 'message' => 'No Record Found !']);
        }
    }

    public function store(CreateSiteLocationRequest $request, CreateSiteLocationAction $createSiteLocationAction)
    {
        $site_location = $createSiteLocationAction->create($request);

        if ($site_location->wasRecentlyCreated)
        {
            return response()->json($site_location, 201);    
        }else {
            return response()->json([ 'message' => 'some error occured']);
        }
    }
}
