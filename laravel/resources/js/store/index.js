/*jshint esversion: 6 */

import Vue from "vue";
import Vuex from "vuex";
import ServiceType from "./ServiceType";
import SiteLocation from "./SiteLocation";
import User from "./User";
import Speed from "./Speed";

Vue.use(Vuex);

export default new Vuex.Store({
	state:{},
	mutations:{},
	actions:{},
	modules:{
		User,
		ServiceType,
		SiteLocation,
		Speed,
	}
});