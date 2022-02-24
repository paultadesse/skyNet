import Api from './Api';

export default {
	getServiceTypes() 
	{
		return Api.get("service-types");
	},

	postRegistration(registration) 
	{
		return Api.post("registration/create", registration);
	}
}