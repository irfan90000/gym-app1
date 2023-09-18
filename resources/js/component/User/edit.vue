<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper"  style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-10 grid-margin stretch-card mt-5">
                    <div class="card mt-5"  style="background: #191c24;">
                        <div class="card-body">
                            <h2 class="card-title">Edit User</h2>
                            <form class="forms-sample" @submit.prevent="submit($event)">
                                <ul>
                                    <li v-for="error in errors" style="color: white;">{{ error }}</li>
                                </ul>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" name="name" v-model="form.name" class="form-control"
                                        id="exampleInputUsername1" placeholder="Name">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="text" name="email" v-model="form.email" class="form-control"
                                        id="exampleInputUsername1" placeholder="Email">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Phone</label>
                                    <input type="text" name="phone" v-model="form.phone" class="form-control"
                                        id="exampleInputUsername1" placeholder="Phone">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Address</label>
                                    <input type="text" name="address" v-model="form.address" class="form-control"
                                        id="exampleInputUsername1" placeholder="Address">
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
    name: 'edit',
    components: {
        navbar,
        sidebar
    },
    data() {
        return {
            errors: [],
            form: {
                name: '',
                email: '',
                phone: '',
                address: ''
            }
        }
    },
    methods: {
        async edit() {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/edit/user/' + this.$route.params.id,{headers});
            this.form.name = response.data.username;
            this.form.email = response.data.email;
            this.form.phone = response.data.phone;
            this.form.address = response.data.address;
        },
        async submit(e) {
            this.errors = [];
            if (!this.form.name) {
                this.errors.push('Name required.');
                return;
            }
            if (!this.form.email) {
                this.errors.push('Email required.');
                return;
            }
            if (!this.form.phone) {
                this.errors.push('Phone required.');
                return;
            }
            if (!this.form.address) {
                this.errors.push('Address required.');
                return;
            }

            e.preventDefault();
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.post('/update/user/' + this.$route.params.id, this.form,{headers});
            if (response.data.status == 200) {
                this.$router.push('/user')
            }

        },

    },
    mounted() {
        this.edit();
    }
}
</script>
<style scope>
.form-group {
    border-bottom: 1px solid #2c2e33;
    padding-bottom: 0.8rem;
    margin-bottom: 0.8rem;
}
form .label{
    color: white;
    font-size: 13px;
}
</style>