import RegistrationService from '../../services/RegistrationService.js';

const state = {
    siteLocations: []
};
const getters = {
    // siteLocations: state => state.siteLocations
};
const actions = {

    createSiteLocation({ commit }, siteLocation) {
        return RegistrationService.postSiteLocation(siteLocation).then((response) => {
            commit('ADD_SITE_LOCATION', response.data)
        });
    },

    updateSiteLocation({ commit }, siteLocation) {
        return RegistrationService.updateSiteLocation(siteLocation).then((response) => {  });
    },

    fetchSiteLocations({ commit }) {
        RegistrationService.getSiteLocations().then((response) => {
            commit('SET_SITE_LOCATIONS', response.data.data)
        }).catch(() => {});
    }
};
const mutations = {

    ADD_SITE_LOCATION(state, siteLocation) {
        state.siteLocations.push(siteLocation)
    },

    SET_SITE_LOCATIONS(state, siteLocations) {
        state.siteLocations = siteLocations
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
