<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper" style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-10 grid-margin stretch-card mt-5">
                    <div class="card mt-5" style="background: #36445d;">
                        <div class="card-body">
                            <h2 class="card-title">Add Category</h2>
                            <form class="forms-sample" @submit.prevent="submit($event)">
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1" style="font-size: 13px;">Name</label>
                                    <input type="text" name="name" v-model="form.name" class="form-control "
                                        id="exampleInputUsername1" placeholder="Name" style="height: 36px; color:white !important; text-transform: none;">
                                </div>
                                <div class="form-check d-flex">
                                    <label class="label" style="margin-top: -6px;"> Status </label>
                                    <input type="checkbox" v-model="form.status" class=""
                                        style="margin-left:6px; margin-top:-17px;">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
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
    name: 'add',
    components: {
        navbar,
        sidebar
    },
    data() {
        return {
            errors: [],
            form: {
                name: '',
                status: '',
            }
        }
    },
    methods: {
        async submit(e) {
            this.errors = [];
            if (!this.form.name) {
                this.errors.push('Name required.');
                return;
            }
            e.preventDefault();
            // const response = await axios.post('/add/category', );

            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };

            const response = await axios.post('/add/category', this.form,{ headers });
            this.Users = response.data;

            if (response.data.status == 200) {
                this.$router.push('/category')
            }

        },
        async getUser() {

        }
    },
}
</script>
<style scope>
.form-group {
    border-bottom: 1px solid #2c2e33;
    padding-bottom: 0.8rem;
    margin-bottom: 0.8rem;
}

form .label {
    color: white;
    font-size: 13px;
    font-family: system-ui;
}
</style>
