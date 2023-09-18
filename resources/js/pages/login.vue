<template id="app">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card offset-2 mt-5 " style="background: #191c24;">
            <div class="card" style="background: #191c24;">
                <div class="card-body">
                    <h4 class="card-title" style="    margin-bottom: 38px;">Login</h4>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Email"
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
                email: '',
                password: ''
            }
        }
    },
    methods: {
        async submit() {
            const response = await axios.post('/login', this.form);
            if (response.data.code == 200) {
                localStorage.setItem("token", response.data.token);
                localStorage.setItem("user_id", response.data.user.id);
                if (response.data.user.role == 'admin') {
                    this.$router.push("/dashboard");
                } else {
                    this.$router.push('/')
                }

            } else {
                alert(response.data.message)
            }
        }
    }
}
</script>
<style>
form label{
    margin-top: -28px;
    margin-left: -16px;
}
</style>