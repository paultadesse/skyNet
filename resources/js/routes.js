import Home from "./components/Home";
import Services from "./components/Services";
import About from "./components/About";
import Contact from "./components/Contact";
import Register from "./components/Register";
import PageNotFound from "./components/PageNotFound";
import Login from "./components/Admin/Login";
import AdminDashboard from "./components/Admin/AdminDashboard";
import ServiceTypes from "./components/Admin/service-types/ServiceTypes";
import SiteLocations from "./components/Admin/site-locations/SiteLocations";

export default {
    mode: "history",
    // linkActiveClass: "border-b-2 border-t-2 border-gray-400 text-gray-500 ",
    linkExactActiveClass: "border-b-2 border-GreenLizard text-GreenSheen font-bold  ",
    scrollBehavior(to, from, savedPosition) {
        if(savedPosition){
            return savedPosition
        }else {
            //scroll to the top
            return { x:0, y:0, behavior: 'smooth'}
            
            // return new Promise((resolve, reject) => {
            //   setTimeout(() => {
            //     resolve({ x:0, y:0, behavior: 'smooth' })
            //   }, 500)
            // })
        }
    },
    routes: [
        {
            path: "*",
            component: PageNotFound
        },

        {
            path: "/",
            component: Home,
            name: "home",
        },
        {
            path: "/services",
            component: Services,
            name: "services",
        },
        {
            path: "/about",
            component: About,
            name: "about",
        },
        {
            path: "/contact",
            component: Contact,
            name: "contact",
        },
        {
            path: "/register",
            component: Register,
            name: "register"
        },
        {
            path: "/admin-login",
            component: Login,
            name: "admin-login"
        },
        {
            path: "/admin-dashboard",
            component: AdminDashboard,
            name: "admin-dashboard"
        },
        {
            path: "/service-types",
            component: ServiceTypes,
            name: "service-types"
        },
        {
            path: "/site-locations",
            component: SiteLocations,
            name: "site-locations"
        },
    ],
};
