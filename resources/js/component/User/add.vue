<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper"  style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-10 grid-margin stretch-card mt-5">
                    <div class="card mt-5"   style="background: #36445d;">
                        <div class="card-body">
                            <h2 class="card-title">Add Trainer</h2>
                            <form class="forms-sample" @submit.prevent="submit($event)">
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Username</label>
                                    <input type="text" name="username" v-model="form.username" class="form-control" id="exampleInputUsername1"
                                        placeholder="username">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="text" name="email" v-model="form.email" class="form-control" id="exampleInputUsername1"
                                        placeholder="Email">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Phone</label>
                                    <input type="text" name="phone" v-model="form.phone" class="form-control" id="exampleInputUsername1"
                                        placeholder="phone">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Coupon code</label>
                                    <input type="text" name="coupon_code" v-model="form.coupon_code" class="form-control" id="exampleInputUsername1"
                                           placeholder="Coupon code">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Discount %</label>
                                    <input type="text"   class="form-control" id="exampleInputUsername1"
                                           placeholder="Coupon code">
                                </div>

                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Address</label>
                                    <input type="text" name="address" v-model="form.address" class="form-control" id="exampleInputUsername1"
                                        placeholder="Address">
                                </div>

                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Image</label>
                                    <input type="file" name="image"  multiple="multiple"
                                           data-max_length="2" class="form-control" id="exampleInputUsername1"
                                           placeholder="File">
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
    data(){
        return{
            errors: [],
            form:{
                username:'',
                email:'',
                phone:'',
                address:'',
                coupon_code:'',
                image:null
            }
        }
    },
    methods:{
        async submit(e) {
            this.errors = [];
            if (!this.form.username) {
                this.errors.push('Username required.');
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
            const response = await axios.post('/add/user', this.form,{headers});
            if (response.data.status == 200) {
                this.$router.push('/trainer')
            }

        }
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
.form-control {
    height: 32px !important;
}
select.form-control {
    line-height: 3.4 !important;
}
</style>
