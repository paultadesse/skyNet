<?php 

namespace App\Actions;

use App\Http\Requests\SiteLocation\CreateSiteLocationRequest;
use App\Models\SiteLocation;

class CreateSiteLocationAction {

	/**
	 * 
	 * 
	 *  This class is no longer in use [ i replace it with service class instead :to handle more methods: ]
	 * 
	 * 
	 * 
	 * */

	public function create(CreateSiteLocationRequest $request) : SiteLocation 
	{
		$created_site_location = SiteLocation::create([
			'name' => $request['name']
		]); 

		// i think i can remove the [ if ] block and directly return [ $created_site_location ] since it will be checked in the controller

		if($created_site_location->wasRecentlyCreated)
		{
			return $created_site_location;
		}

		return $created_site_location;
	}
}