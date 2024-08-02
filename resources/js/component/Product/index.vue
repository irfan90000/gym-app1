<template>
      <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper">
            <navbar />
            <div class="row col-12 mt-5" style="background-color: #191C24;">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5 card-design">
                        <div class="card-body" style="background-color: #36445d;">
                            <div class="row" style="margin:10px 0 40px 0">
                                <h2 class="card-title col-11">Product</h2>
                                <router-link to="add/product" class="nav-link btn btn-primary col-1 text-center mt-3 " style="font-size: 14px;">Add</router-link>
                            </div>

                            <div class=" table">
                                <table class="table table-dark table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th  style="text-align: inherit; font-size: 18px;">Id</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Name</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Title</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Price</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Status</th>
                                            <th  style="text-align: inherit; font-size: 18px;">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="product in Products">
                                            <td class="py-4"  style="text-align: inherit; font-size: 18px;">{{ product.id }}</td>
                                            <td class="py-4"  style="text-align: inherit; font-size: 18px;">{{ product.name }}</td>
                                            <td class="py-4"  style="text-align: inherit; font-size: 18px;">{{ product.title }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">${{ product.price }}</td>
                                            <td class="py-4"  style="text-align: inherit; font-size: 18px;">
                                                <span class="badge badge-pill badge-success">Active</span>
                                            </td>
                                            <td class="py-4 mt-3" style="text-align: inherit; font-size: 18px;">
                                                <a @click="show(product.id)" class="btn  btn-warning ">Show</a>
                                            <a @click="edit(product.id)" class="btn btn-success btunh">Edit</a>
                                            <a @click="del(product.id)" class="btn btn-danger btunh">Delete</a></td>
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
<style scoped>
.btunh{
    margin-left: 10px !important;
}

.table thead:before {
    background-color: transparent;
}
.table-responsive {
    overflow-x: 0 !important;
}
th{
    font-size : 20px;
    padding: 20px !important;
}
td{
    padding-left: 20px !important;
}
</style>
