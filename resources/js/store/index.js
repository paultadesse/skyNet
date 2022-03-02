import Vue from "vue";
import Vuex from "vuex";
import ServiceType from "./ServiceType";
import SiteLocation from "./SiteLocation";

Vue.use(Vuex);

export default new Vuex.Store({
	state:{},
	mutations:{},
	actions:{},
	modules:{
		ServiceType,
		SiteLocation
	}
});