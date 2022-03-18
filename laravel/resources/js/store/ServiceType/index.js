/*jshint esversion: 6 */
// When relying upon ECMAScript 6 features such as [const], you should set this option so JSHint doesn't raise unnecessary warnings.

import RegistrationService from '../../services/RegistrationService.js';

const state = {
    serviceTypes: []
};
const getters = {
    // serviceTypes: state => state.serviceTypes
};
const actions = {
    createServiceType({ commit }, serviceType) {
        return RegistrationService.postServiceType(serviceType).then((response) => {
            commit('ADD_SERVICE_TYPE', response.data)
        })
    },
    fetchServiceTypes({ commit }) {
        RegistrationService.getServiceTypes().then((response) => {
            commit('SET_SERVICE_TYPES', response.data.data)
        }).catch(() => {});
    }
};
const mutations = {
    ADD_SERVICE_TYPE(state, serviceType) {
        state.serviceTypes.push(serviceType)
    },
    SET_SERVICE_TYPES(state, serviceTypes) {
        state.serviceTypes = serviceTypes
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
