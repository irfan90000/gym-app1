// require('./bootstrap');
// import * as Vue from 'vue'
import App from './App.vue'
import router from './router.js'
import mixin from './mixins/index.js';
import axios from 'axios';
import store from './Vuex/store/index.js';

// new Vue({
//     render: h => h(App),
// }).$mount("#app");
import { createApp } from 'vue'
axios.defaults.baseURL='/api';
createApp(App).use(router).use(store).mixin(mixin).mount('#app')


