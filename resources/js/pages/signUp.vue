<template id="app">

    <div class="row hero-section">
        <div class="col-md-8 grid-margin stretch-card offset-2 mt-5 ">
            <div class="card" style="background: #191c24;">

                <div class="card-body">
                    <h4 class="card-title mb-5">Sign Up</h4>
                    <form class="forms-sample" @submit.prevent="submit">

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="email" v-model="form.name" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group mt-5">
                            <label>Email</label>
                            <input type="email" name="email" v-model="form.email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mt-5">
                            <label>Password</label>
                            <input type="password" name="password" v-model="form.password" class="form-control"
                                placeholder="Password">
                        </div>

                        <button class="btn btn-primary btn-block mt-5 me-2">Submit</button>
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
<style>
.hero-section {
  background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),
    url(../../public/assets/images/content/bg-gym-login.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100vh;
}
.custom-main-box {
    margin: 120px auto !important;
    height: 100%;
}
.custom-crd {
    padding: 25px 50px 40px 50px;
    margin: 0px;
}
.me-2 {
    font-size: 16px !important;
    padding: 7px 0 !important;
}
</style>
