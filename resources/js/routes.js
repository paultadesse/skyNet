import Home from "./components/Home";
import Services from "./components/Services";
import About from "./components/About";
import Contact from "./components/Contact";
export default {
    mode: "history",
    // linkActiveClass: "border-b-2 border-t-2 border-gray-400 text-gray-500 ",
    linkExactActiveClass: "border-b-2 border-LightGreen text-LightGreen font-bold  ",
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
        {
            path: "/contact",
            component: Contact,
            name: "contact",
        },
    ],
};
