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


}