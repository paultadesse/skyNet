import Api from './Api';

export default {
	getServiceTypes() 
	{
		return Api.get("service-types");
	},

	getSiteLocations()
	{
		return Api.get("site-locations");
	},

	getRegistrations(){
		return Api.get("registrations");
	},

	postSiteLocation(siteLocation)
	{
		return Api.post("site-location/create", siteLocation);
	},

	updateSiteLocation(siteLocation)
	{
		return Api.put("site-location/" + siteLocation.id + "/edit", siteLocation);
	},

	postRegistration(registration) 
	{
		return Api.post("registration/create", registration);
	},

	postServiceType(serviceType) 
	{
		return Api.post("service-type/create", serviceType);
	},

	getSpeeds()
	{
		return Api.get("speed");
	},

	postSpeed(speed)
	{
		return Api.post("speed/create", speed);
	},

	updateSpeed(speed)
	{
		return Api.put("speed/" + speed.id + "/edit", speed);
	},


}