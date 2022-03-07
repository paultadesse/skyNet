import axios from "axios";

const Api = axios.create({
	baseURL: process.env.MIX_APP_URL + "/api",
	withCredentials: false,
	headers: {
		'Accept': 'application/json',
		'Content-Type': 'application/json',
	}
});

Api.interceptors.request.use(config => {
	let logged_in_user  = localStorage.getItem('user');
	if (logged_in_user !== null) {
		let user = JSON.parse(logged_in_user);
		config.headers['Authorization'] = `Bearer ${user.token}`;
	}
		
	return config;
})

export default Api;