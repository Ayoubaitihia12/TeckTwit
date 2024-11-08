import { createRouter , createWebHistory } from "vue-router";

import home from '../components/home.vue'
import profile from '../components/profile.vue'



const routes = [
    {
        path : '/',
        component: home,
    },
    {
        path : '/profile',
        component: profile,
    }
]





const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router