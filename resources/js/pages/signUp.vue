<template id="app">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card offset-2 mt-5 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sign Up</h4>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group">
                            <label >User Name</label>
                            <input type="text" name="email" v-model="form.name" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label >Phone</label>
                            <input type="number" name="email" v-model="form.phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label >Address</label>
                            <input type="text" name="email" v-model="form.address" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" name="password" v-model="form.password" class="form-control" 
                                placeholder="Password">
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
            if(response.data.status == 200){
                localStorage.setItem("token",response.data.token);
                localStorage.setItem("user_id",response.data.user.id);
                this.$router.push("/theme");
            }
        }
    }
}
</script>