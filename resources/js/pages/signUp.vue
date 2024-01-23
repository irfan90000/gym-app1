<template id="app">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card offset-2 mt-5 ">
            <div class="card" style="background: #191c24;">
                <div class="card-body">
                    <h4 class="card-title mb-5">Sign Up</h4>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group mt-5">
                            <label>Name</label>
                            <input type="text" name="name" v-model="form.name" class="form-control" placeholder="Name"
                            style="height: 32px;">
                        </div>
                        <div class="form-group mt-5">
                            <label>Email</label>
                            <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Email"
                            style="height: 32px;">
                        </div>
                        <div class="form-group mt-5">
                            <label>Phone</label>
                            <input type="number" name="phone" v-model="form.phone" class="form-control" placeholder="Phone"
                            style="height: 32px;">
                        </div>
                        <div class="form-group mt-5">
                            <label>Password</label>
                            <input type="password" name="password" v-model="form.password" class="form-control"
                                placeholder="Password" style="height: 32px;">
                        </div>
                        <button class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'app',
    data() {
        return {
            form: {
                name: '',
                email: '',
                phone: '',
                address: '',
                password: ''
            }
        }
    },
    methods: {
        async submit() {
            const response = await axios.post('/signUp', this.form);
            console.log(response);
            if(response.data.status == 200){
                this.$router.push("/");
            }
        }
    }
}
</script>