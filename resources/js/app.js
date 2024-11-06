import './bootstrap';
import vuetify from './plugins/vuetify';

import { createApp } from 'vue';

import app from './components/app.vue'

import router from './router'

createApp(app).use(router).use(vuetify).mount('#app');