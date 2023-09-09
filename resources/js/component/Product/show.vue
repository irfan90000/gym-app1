<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper">
            <navbar />
            <div class="row col-12 mt-5" style="background-color: #191c24;">
                <div class="col-12 grid-margin stretch-card mt-5">
                    <div class="card card-design">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="card-title col-10">Files</h2>
                                <router-link to="/product" class="nav-link btn btn-primary col-1">Back</router-link>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Image</th>
                                            <th >File</th>
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="file in files">
                                            <td class="text-left">{{ file.image }}</td>
                                            <td>{{ file.type }}</td>
                                            <td>
                                                <a @click="download(file.id)" download
                                                    class="btn btn-success">Download</a>&nbsp;
                                                <a @click="del(file.id)" class="btn btn-danger">Delete</a>
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
            files: ''
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        async getMedia() {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/show/product/' + this.$route.params.id,{headers});
            this.files = response.data.files;
        },
        async del(id) {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/delete/file/' + id,{headers});
            this.getMedia();
        },
        async download(id) {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/download/file/' + id, {
                responseType: 'blob',
                headers: headers
            });
            var fileURL = window.URL.createObjectURL(new Blob([response.data]));
            var fileLink = document.createElement('a');

            fileLink.href = fileURL;
            fileLink.setAttribute('download', 'file.pdf');
            document.body.appendChild(fileLink);

            fileLink.click();
        }
    },
    mounted() {
        this.getMedia();
    }
}
</script>
<style>
.card-design{
    background: #191c24 !important;
}
th{
    font-size: 20px;
}
</style>
