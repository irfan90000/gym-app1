import { createRouter, createWebHistory } from "vue-router";


import Login from '../js/pages/login.vue';

import AddCategory from '../js/component/Category/add.vue';
import EditCategory from '../js/component/Category/edit.vue';
import Category from '../js/component/Category/index.vue';

import AddProduct from '../js/component/product/add.vue';
import EditProduct from '../js/component/product/edit.vue';
import ShowProduct from '../js/component/product/show.vue';
import Product from '../js/component/product/index.vue';

import AddSetting from '../js/component/setting/add.vue';
import EditSetting from '../js/component/setting/edit.vue';
import Setting from '../js/component/setting/index.vue';

import AddUser from '../js/component/User/add.vue';
import EditUser from '../js/component/User/edit.vue';
import Users from '../js/component/User/index.vue';
import ShowUsers from '../js/component/User/show.vue';

import dashboard from '../js/component/dashboard.vue';
import Theme from '../js/component/HelloWorld.vue';

import Subscription from '../js/pages/subscription.vue';
import Program from '../js/pages/program.vue';
import SignUp from '../js/pages/signUp.vue';

import box1 from '../js/component/Boxes/Box1.vue'; 
import box2 from '../js/component/Boxes/Box2.vue'; 
import box3 from '../js/component/Boxes/Box3.vue'; 
import box4 from '../js/component/Boxes/Box4.vue'; 
import box5 from '../js/component/Boxes/Box5.vue'; 
import box6 from '../js/component/Boxes/Box6.vue'; 
import reset from '../js/pages/reset.vue';
import forgetPass from '../js/pages/forgetPass.vue';


const routes = [
    { path: "/login", component: Login },
    { path: "/category", component: Category },
    { path: "/product", component: Product },
    { path: "/add/product/", component: AddProduct },
    { path: "/edit/product/:id", component: EditProduct },
    { path: "/show/product/:id", component: ShowProduct },
    { path: "/add/category", component: AddCategory },
    { path: "/edit/category/:id", component: EditCategory },
    { path: "/settings", component: Setting },
    { path: "/add/setting/", component: AddSetting },
    { path: "/edit/setting/:id", component: EditSetting },
    { path: "/dashboard", component: dashboard },
    { path: "/add/user/", component: AddUser },
    { path: "/edit/user/:id", component: EditUser },
    { path: "/show/user/:id", component: ShowUsers },
    { path: "/user", component: Users },
    { path: "/", component: Theme},
    { path: "/subscription", component: Subscription},
    { path: "/program", component: Program},
    { path: "/signUp", component: SignUp},
    { path: "/b1", component: box1},
    { path: "/b2", component: box2},
    { path: "/b3", component: box3},
    { path: "/b4", component: box4},
    { path: "/b5", component: box5},
    { path: "/b6", component: box6},
    { path: "/reset", component: reset},
    { path: "/forgetPass", component: forgetPass},
];
const router = createRouter({
    history : createWebHistory(),
    routes,
})
export default router;