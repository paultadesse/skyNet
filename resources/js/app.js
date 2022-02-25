require("./bootstrap");

window.Vue = require("vue").default;
import VueRouter from "vue-router";
import routes from './routes';
import Vuelidate from 'vuelidate';

import Vue from 'vue'
import upperFirst from 'lodash/upperFirst'
import camelCase from 'lodash/camelCase'

import VueSweetalert2 from 'vue-sweetalert2';

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);

const requireComponent = require.context(
  // The relative path of the components folder
  './components',
  // Whether or not to look in subfolders
  false,
  // The regular expression used to match base component filenames
  /Base[A-Z]\w+\.(vue|js)$/
)

requireComponent.keys().forEach(fileName => {
  // Get component config
  const componentConfig = requireComponent(fileName)

  // Get PascalCase name of component
  const componentName = upperFirst(
    camelCase(
      // Gets the file name regardless of folder depth
      fileName
        .split('/')
        .pop()
        .replace(/\.\w+$/, '')
    )
  )


  // Register component globally
  Vue.component(
    componentName,
    // Look for the component options on `.default`, which will
    // exist if the component was exported with `export default`,
    // otherwise fall back to module's root.
    componentConfig.default || componentConfig
  )
})

Vue.use(Vuelidate);
Vue.use(VueRouter);

Vue.component("nav-bar", require("./components/Navbar.vue").default);
Vue.component("footer-bar", require("./components/Footerbar.vue").default);
Vue.component("register-banner", require("./components/Registerbanner.vue").default);

const app = new Vue({
    el: "#app",
    router: new VueRouter(routes),
});
