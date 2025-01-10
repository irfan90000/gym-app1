<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #36445d;">
                        <div class="card-body">
                            <div class="row" style="margin:10px 0 40px 0">
                                <h2 class="card-title col-11">Category</h2>
                                <router-link to="add/category" class="nav-link btn btn-primary col-1 mt-3" style="font-size: 14px;">Add</router-link>
                            </div>
                            <div class="table">
                                <table class="table table-dark table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: inherit;">Id</th>
                                            <th style="text-align: inherit;">Name</th>
                                            <th style="text-align: inherit; font-size: 18px;">Status</th>
                                            <th style="text-align: center; font-size: 18px;">Action</th>
                                            <th style="text-align: inherit; font-size: 18px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="category in Categories">
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ category.id }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ category.name }}</td>
                                            <td class="py-4"  style="text-align: inherit; font-size: 18px;">
                                                <span class="badge badge-pill badge-success">Active</span>
                                            </td>
                                            <td class="py-4 " style="text-align: center; font-size: 18px;"><a class="btn btn-success"
                                                    @click="edit(category.id)">Edit</a>
                                                <a class="btn btn-danger btn-cat" @click="del(category.id)">Delete</a>
                                            </td>
                                            <td></td>
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
    name: 'index',
    data() {
        return {
            Categories: []
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        async getCategory() {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/category', { headers });
            this.Categories = response.data;
        },
        async edit(id) {
            this.$router.push(`/edit/category/${id}`);
        },
        async del(id) {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/delete/category/' + id, { headers });
            this.getCategory();
        }
    },
    mounted() {
        this.getCategory();
    }
}
</script>
<style scoped>
.btn-cat{
    margin-left: 10px;
}
.table thead:before {
    background-color: transparent !important;
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
