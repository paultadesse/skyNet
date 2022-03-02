import Api from '../Api.js';

export default {
	loginUser(user)
	{
		return Api.post("user/login", user);
	},

	logoutUser()
	{
		return Api.post("user/logout");
	}
}