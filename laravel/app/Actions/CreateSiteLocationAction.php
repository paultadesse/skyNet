<?php 

namespace App\Actions;

use App\Http\Requests\SiteLocation\CreateSiteLocationRequest;
use App\Models\SiteLocation;

class CreateSiteLocationAction {

	public function create(CreateSiteLocationRequest $request) : SiteLocation 
	{
		$created_site_location = SiteLocation::create([
			'name' => $request['name']
		]); 

		if($created_site_location->wasRecentlyCreated)
		{
			return $created_site_location;
		}

		return $created_site_location;
	}
}