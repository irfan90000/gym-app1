<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper">
            <navbar />
            <div class="row col-12 mt-5" style="background: #191c24;">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #36445d;">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="card-title col-9">Subscription</h2>
                                <router-link to="add/user" class="nav-link btn btn-primary col-1 mt-3" style="font-size: 14px;">Add</router-link>
                            </div>
                            <div class="table-responsive mt-xl-5">
                                <table class="table table-dark table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: inherit; font-size: 18px;">Id</th>
                                            <th style="text-align: inherit; font-size: 18px;">Name</th>
                                            <th style="text-align: inherit; font-size: 18px;">Price</th>
                                            <th style="text-align: inherit; font-size: 18px;">Status</th>
                                            <th style="text-align: inherit; font-size: 18px;">Description</th>
                                            <th style="text-align: inherit; font-size: 18px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="Product in Products">
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ Product.id }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ Product.name }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ Product.price }}</td>

                                            <td class="py-4" style="text-align: inherit; font-size: 18px;"> <span class="badge badge-pill badge-success">Success</span></td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ Product.description }}</td>

                                            <td class="py-4" style="text-align: inherit; font-size: 18px;"><a @click="show(product.id)" class="btn btn-warning">Show</a>
                                                <a @click="edit(product.id)" class="btn btn-success btn-sub">Edit</a>
                                                <a @click="del(product.id)" class="btn btn-danger btn-sub">Delete</a></td>
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
import navbar from '../navbar.vue';
import axios from 'axios';
export default {
    name: 'index',
    data() {
        return {
            Products: []
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        async getProduct() {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/product/subscription',{headers});
            this.Products = response.data;
        },
    },
    mounted() {
        this.getProduct();
    }
}
</script>
<style scoped>
.table thead:before {
    background-color: transparent;
}
th{
    font-size : 20px;
    padding: 20px !important;
}
td{
    padding-left: 20px !important;
}
.btn-sub{
    margin-left: 10px !important;
}
</style>
