import { createRouter, createWebHistory } from "vue-router";


import Login from '../js/pages/login.vue';

import AddCategory from '../js/component/Category/add.vue';
import EditCategory from '../js/component/Category/edit.vue';
import Category from '../js/component/Category/index.vue';

import AddProduct from '../js/component/Product/add.vue';
import EditProduct from '../js/component/Product/edit.vue';
import ShowProduct from '../js/component/Product/show.vue';
import Product from '../js/component/Product/index.vue';

import AddSetting from '../js/component/Setting/add.vue';
import EditSetting from '../js/component/Setting/edit.vue';
import Setting from '../js/component/Setting/index.vue';

import AddUser from '../js/component/User/add.vue';
import EditUser from '../js/component/User/edit.vue';
import Users from '../js/component/User/index.vue';
import ShowUsers from '../js/component/User/show.vue';

import dashboard from '../js/component/dashboard.vue';
import Theme from '../js/component/HelloWorld.vue';

import orders from '../js/component/order.vue';
import orderShow from '../js/component/orderShow.vue';
import Subscription from '../js/pages/subscription.vue';
import Program from '../js/pages/program.vue';
import SignUp from '../js/pages/signUp.vue';

import box1 from '../js/component/Boxes/Box1.vue';
import box2 from '../js/component/Boxes/Box2.vue';
import box3 from '../js/component/Boxes/Box3.vue';
import box4 from '../js/component/Boxes/Box4.vue';
import box5 from '../js/component/Boxes/Box5.vue';
import box6 from '../js/component/Boxes/Box6.vue';
import main_box from '../js/component/Boxes/main_box.vue';


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
    { path: "/show/order/:id", component: orderShow },
    { path: "/user", component: Users },
    { path: "/", component: Theme},
    { path: "/subscription", component: Subscription},
    { path: "/program", component: Program},
    { path: "/orders", component: orders},
    { path: "/signUp", component: SignUp},
    { path: "/b1", component: box1},
    { path: "/b2", component: box2},
    { path: "/b3", component: box3},
    { path: "/b4", component: box4},
    { path: "/b5", component: box5},
    { path: "/b6", component: box6},
    { path: "/select-gender", component: main_box},
];
const router = createRouter({
    history : createWebHistory(),
    routes,
})
export default router;
