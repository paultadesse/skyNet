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

	postRegistration(registration) 
	{
		return Api.post("registration/create", registration);
	}
}