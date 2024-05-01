<template>
    <div class="container-scroller">
        <sidebar/>
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar/>
            <div class="row col-12 mt-5">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #191c24;">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="card-title col-11">Orders</h2>
                                <!-- <router-link to="add/user" class="nav-link btn btn-primary col-1">Add</router-link> -->
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="text-align: inherit; font-size: 18px;">User Name</th>
                                        <th style="text-align: inherit; font-size: 18px;">Product</th>
                                        <th style="text-align: inherit; font-size: 18px;">Category Type</th>
                                        <th style="text-align: inherit; font-size: 18px;">Payment Id</th>
                                        <th style="text-align: inherit; font-size: 18px;">Created at</th>

                                        <!-- <th style="text-align: inherit; font-size: 18px;">Address</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="order in orders">
                                        <td style="text-align: inherit; font-size: 18px;">{{ order.user.username }}</td>
                                        <td style="text-align: inherit; font-size: 18px;">
                                            {{ order.product ? order.product.name : '' }}
                                        </td>
                                        <td style="text-align: inherit; font-size: 18px;">
                                            {{ order.product ? order.product.category.name : '' }}
                                        </td>
                                        <td style="text-align: inherit; font-size: 18px;">{{ order.payment_id }}</td>
                                        <td style="text-align: inherit; font-size: 18px;">{{ order.created_at }}</td>
                                        <!-- <td style="text-align: inherit; font-size: 18px;">{{ user.address }}</td> -->
                                        <!--                                            <td style="text-align: inherit; font-size: 18px;">-->
                                        <!--                                                <a @click="show(order.id)" class="btn btn-warning">Show</a>-->
                                        <!--                                            </td>-->
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import sidebar from '../sidebar.vue';
// import sidebar from '../../sidebar.vue';
import navbar from '../navbar.vue';
import axios from 'axios';

export default {
    name: 'index',
    data() {
        return {
            orders: ''
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        // async getUser(){
        //     const response = await axios.get('/users');
        //     this.Users = response.data;
        // },
        async getOrders() {
            try {
                const token = localStorage.getItem('token'); // Replace with your actual authentication token
                const headers = {
                    'Authorization': `Bearer ${token}`
                };

                const response = await axios.get('/orders', {headers});
                this.orders = response.data;
            } catch (error) {
                console.error("Error fetching users:", error);
            }
        },
        async edit(id) {
            this.$router.push(`/edit/user/${id}`);
        },
        async show(id) {
            this.$router.push(`/show/order/${id}`);
        },
        async del(id) {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/delete/user/' + id, {headers});
            this.getOrders();
        }
    },
    mounted() {
        this.getOrders();
    }
}
</script>
<style>
.table thead:before {
    background-color: #191c24;
}

.table-responsive {
    overflow-x: 0 !important;
}
th{
    font-size : 20px
}
</style>
