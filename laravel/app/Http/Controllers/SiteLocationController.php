<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteLocation\CreateSiteLocationRequest;
use App\Http\Requests\SiteLocation\EditSiteLocationRequest;
use App\Http\Resources\SiteLocationResource;
use App\Models\SiteLocation;
use App\Services\SiteLocationService;
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

    public function update(EditSiteLocationRequest $request, SiteLocation $siteLocation, SiteLocationService $siteLocationService)
    {

        $edited_site_location = $siteLocationService->update($request, $siteLocation);

        if($edited_site_location)
        {
            return response()->json($siteLocation, 200);

        }else {

            return response()->json([ 'message' => 'Record not updated'], abort(304));

        }

    }

    public function store(CreateSiteLocationRequest $request, SiteLocationService $siteLocationService)
    {
        $site_location = $siteLocationService->create($request);

        if ($site_location->wasRecentlyCreated)
        {
            return response()->json($site_location, 201);   

        }else {

            return response()->json([ 'message' => 'some error occured']);

        }
    }
}
