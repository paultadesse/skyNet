import RegistrationService from '../../services/RegistrationService.js';

const state = {
    speeds: []
};
const getters = {
    // speeds: state => state.speeds
};
const actions = {

    createSpeed({ commit }, speed) {
        return RegistrationService.postSpeed(speed).then((response) => {
            commit('ADD_SPEED', response.data)
        });
    },

    updateSpeed({ commit }, speed) {
        return RegistrationService.updateSpeed(speed).then((response) => {  });
    },

    fetchSpeeds({ commit }) {
        RegistrationService.getSpeeds().then((response) => {
            commit('SET_SPEEDS', response.data.data)
        }).catch(() => {});
    }
};
const mutations = {

    ADD_SPEED(state, speed) {
        state.speeds.push(speed)
    },

    SET_SPEEDS(state, speeds) {
        state.speeds = speeds
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
