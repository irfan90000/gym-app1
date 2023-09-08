<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #36445d;">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="card-title col-11">User</h2>
                                <router-link to="add/user" class="nav-link btn btn-primary col-1">Add</router-link>
                            </div>

                            <div class="table-responsive">
                                <table class="table" style="margin:10px 0 40px 0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: inherit; font-size: 18px;">Name</th>
                                            <th style="text-align: inherit; font-size: 18px;">Email</th>
                                            <th style="text-align: inherit; font-size: 18px;">Phone</th>
                                            <th style="text-align: inherit; font-size: 18px;">Address</th>
                                            <th style="text-align: inherit; font-size: 18px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="user in Users">
                                            <td style="text-align: inherit; font-size: 18px;">{{ user.username }}</td>
                                            <td style="text-align: inherit; font-size: 18px;">{{ user.email }}</td>
                                            <td style="text-align: inherit; font-size: 18px;">{{ user.phone }}</td>
                                            <td style="text-align: inherit; font-size: 18px;">{{ user.address }}</td>
                                            <td style="text-align: inherit; font-size: 18px;">
                                                <a @click="show(user.id)" class="btn btn-warning">Show</a>
                                                <a @click="edit(user.id)" class="btn btn-success">Edit</a>
                                                <a @click="del(user.id)" class="btn btn-danger">Delete</a>
                                            </td>
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
            Users: ''
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
        async getUser() {
            try {
                const token = localStorage.getItem('token'); // Replace with your actual authentication token
                const headers = {
                    'Authorization': `Bearer ${token}`
                };

                const response = await axios.get('/users', { headers });
                this.Users = response.data;
            } catch (error) {
                console.error("Error fetching users:", error);
            }
        },
        async edit(id) {
            this.$router.push(`/edit/user/${id}`);
        },
        async show(id) {
            this.$router.push(`/show/user/${id}`);
        },
        async del(id) {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/delete/user/' + id,{headers});
            this.getUser();
        }
    },
    mounted() {
        this.getUser();
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