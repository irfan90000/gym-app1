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
                                <h2 class="card-title col-11"></h2>
                            </div>
                            <div class="table-responsive">
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
                                        <tr>
                                            <td>{{ orders.age }}</td>
                                            <td>{{ orders.height }}</td>
                                            <td>{{ orders.weight }}</td>
                                            <td>{{ orders.activity }}</td>
                                            <td>{{ orders.besactivity }}</td>
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
            orders: ''
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        async getOrderDetail() {
            try {
                const token = localStorage.getItem('token'); // Replace with your actual authentication token
                const headers = {
                    'Authorization': `Bearer ${token}`
                };

                const response = await axios.get('/order/show/' + this.$route.params.id, { headers });
                this.orders = response.data.user.health;
            } catch (error) {
                console.error("Error fetching users:", error);
            }
        }
    },
    mounted() {
        this.getOrderDetail();
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

th {
    font-size: 20px
}
</style>