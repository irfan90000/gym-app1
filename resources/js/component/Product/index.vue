<template>
      <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper">
            <navbar />
            <div class="row col-12 mt-5" style="background-color: #191C24;">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5 card-design">
                        <div class="card-body" style="background-color: #36445d;">
                            <div class="row">
                                <h2 class="card-title col-11">Product</h2>
                                <router-link to="add/product" class="nav-link btn btn-primary col-1">Add</router-link>
                            </div>

                            <div class="table-responsive">
                                <table class="table" style="margin:10px 0 40px 0">
                                    <thead>
                                        <tr>
                                            <th  style="text-align: inherit; font-size: 18px;">Name</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Title</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Price</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Status</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Action</th>
                                            <th  style="text-align: inherit; font-size: 18px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="product in Products">
                                            <td  style="text-align: inherit; font-size: 18px;">{{ product.name }}</td>
                                            <td  style="text-align: inherit; font-size: 18px;">{{ product.title }}</td>
                                            <td  style="text-align: inherit; font-size: 18px;">{{ product.price }}</td>
                                            <td  style="text-align: inherit; font-size: 18px;">{{ product.status }}</td>
                                            <td  style="text-align: inherit; font-size: 18px;"><a @click="show(product.id)" class="btn btn-warning">Show</a>
                                            <a @click="edit(product.id)" class="btn btn-success">Edit</a>
                                            <a @click="del(product.id)" class="btn btn-danger">Delete</a></td>
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
import sidebar from '../../sidebar.vue';
import navbar from '../../navbar.vue';
import axios from 'axios';
export default {
    name:'index',
    data(){
        return{
            Products:''
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods:{
        async getProduct(){
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/product',{headers});
            this.Products = response.data;
        },
        async edit(id) {
            this.$router.push(`/edit/product/${id}`);
        },
        async show(id) {
            this.$router.push(`/show/product/${id}`);
        },
        async del(id){
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/delete/product/'+id,{headers});
            this.getProduct();
        }
    },
    mounted(){
        this.getProduct();
    }
}
</script>
<style>
.card-design{
    background: #191c24 !important;
}
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
