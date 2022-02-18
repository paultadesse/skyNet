require("./bootstrap");

window.Vue = require("vue").default;
import VueRouter from "vue-router";
import routes from './routes';

Vue.use(VueRouter);

Vue.component("nav-bar", require("./components/Navbar.vue").default);
Vue.component("footer-bar", require("./components/Footerbar.vue").default);
Vue.component("register-banner", require("./components/Registerbanner.vue").default);

const app = new Vue({
    el: "#app",
    router: new VueRouter(routes),
});
