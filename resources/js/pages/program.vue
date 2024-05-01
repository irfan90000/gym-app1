<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #36445d;">
                        <div class="card-body">
                            <div class="row" >
                                <h2 class="card-title col-11">Program</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="text-align: inherit; font-size: 18px;">Id</th>
                                            <th style="text-align: inherit; font-size: 18px;">Name</th>
                                            <th style="text-align: inherit; font-size: 18px;">Price</th>
                                            <th style="text-align: inherit; font-size: 18px;">Status</th>
                                            <th style="text-align: inherit; font-size: 18px;">Description</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="prod in products">
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ prod.id }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ prod.name }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">${{ prod.price }}</td>
                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">
                                                <span class="badge badge-pill badge-success">Success</span>
                                            </td>

                                            <td class="py-4" style="text-align: inherit; font-size: 18px;">{{ prod.description }}</td>

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
            products: ''
        }
    },
    components: {
        navbar,
        sidebar
    },
    async created() {
        await this.fetchData(); // Call the fetchData method when the component is created
    },
    methods: {
        async fetchData() {
            try {
                const token = localStorage.getItem('token');
                const headers = {
                    'Authorization': `Bearer ${token}`
                };

                const response = await axios.get('/product/program', { headers });

                this.products = response.data; // Update the component's data
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }
    },



}
</script>
<style>
.table thead:before {
    background-color: #191c24;
}
th{
    font-size: 20px;
}
</style>
