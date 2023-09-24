import { createStore } from "vuex";
import mutations from './mutation.js';
import getters from './getter.js';
import createPersistedState from "vuex-persistedstate";
export default createStore({
    state: {
        permission:'',
        showSidebar: false,
        showNav:false,
        token:'',
        health:{
            age:'',
            height:'',
            weight:'',
            activity:'',
            bestActivity:'',
            product_id:'',
        }
    },
    mutations,
    getters,
    plugins: [createPersistedState()],
})