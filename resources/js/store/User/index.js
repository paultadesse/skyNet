import UserService from '../../services/User/UserService.js';

const state = {
    user: JSON.parse(localStorage.getItem("user")) || []
};
const getters = { 
    // currentuser: state => state.user,
};
const actions = {
    login({ commit }, user) {
        return UserService.loginUser(user).then((response) => {
            commit('LOGIN', response.data)
        })
    },

    logout({ commit }) {
        return UserService.logoutUser().then((response) => {
            commit('LOGOUT')
        })
    }
};
const mutations = {
    LOGIN(state, user) {
        localStorage.setItem("user", JSON.stringify(user))
        state.user = user
    },
    LOGOUT(state) {
        localStorage.removeItem("user")
        state.user = []
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
