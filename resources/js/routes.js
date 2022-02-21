import Home from "./components/Home";
import Services from "./components/Services";
import About from "./components/About";
import Contact from "./components/Contact";
import Register from "./components/Register";
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
        {
            path: "/register",
            component: Register,
            name: "register"
        },
    ],
};
