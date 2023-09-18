<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #191c24;">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="card-title col-10">Health Detail</h2>
                                <router-link to="/user" class="nav-link btn btn-primary col-1">Back</router-link>
                            </div>

                            <div class="table-responsive mt-5">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Age</th>
                                            <th>Height</th>
                                            <th>Weight</th>
                                            <th>Activity</th>
                                            <th>Base Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="detail in details">
                                            <td>{{ detail.age }}</td>
                                            <td>{{ detail.height }}</td>
                                            <td>{{ detail.weight }}</td>
                                            <td>{{ detail.activity }}</td>
                                            <td>{{ detail.besactivity }}</td>
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
            details: ''
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        async getDetail() {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/show/user/' + this.$route.params.id,{headers});
            this.details = response.data;
        },
    },
    mounted() {
        this.getDetail();
    }
}
</script>
<style>

th{
    font-size : 20px
}
</style>