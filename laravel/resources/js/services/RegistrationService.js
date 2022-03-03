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

	getSpeeds()
	{
		return Api.get("speed");
	},

	getRegistrations(){
		return Api.get("registrations");
	},

	postSiteLocation(siteLocation)
	{
		return Api.post("site-location/create", siteLocation);
	},

	postRegistration(registration) 
	{
		return Api.post("registration/create", registration);
	},

	postServiceType(serviceType) 
	{
		return Api.post("service-type/create", serviceType);
	},

	postSpeed(speed)
	{
		return Api.post("speed/create", speed);
	}


}