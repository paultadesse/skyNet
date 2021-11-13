import Home from "./components/Home";
import Services from "./components/Services";
import About from "./components/About";
export default {
    mode: "history",
    // linkActiveClass: "border-b-2 border-t-2 border-gray-400 text-gray-500 ",
    linkExactActiveClass: "border-b-2 border-blue-900 text-blue-900 font-bold  ",
    routes: [
        // {
        //     path: "*",
        //     component: PageNotFound
        // },

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
    ],
};
