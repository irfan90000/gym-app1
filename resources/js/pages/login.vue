<template id="app">
    <div class="row hero-section">
        <div class="col-md-8 grid-margin stretch-card offset-2 custom-main-box">
            <div class="card custom-crd" style="background: rgb(0, 0, 0, 0.6); max-width: 768px">
                <div class="card-body">
                    <h4 class="card-title" style="margin-bottom: 25px; color: white">Login</h4>
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
            localStorage.setItem("token", response.data.token);
            console.log(response, 'dfgdfg');
            if (response.data.code == 200) {
                if (response.data.user.role == 'admin') {
                    this.$router.push("/dashboard");
                } else {
                    this.$router.push('/theme')
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
    font-size: larger;
    margin-top: -28px;
    margin-left: -16px;
    color: white;
    padding-left: 16px;
}
.hero-section {
  background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),
    url(../../public/assets/images/content/bg-gym-login.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 100vh;
}
.custom-main-box {
    width: 580px;
    margin: 120px auto;
}
.custom-crd {
    padding: 25px 50px;
    margin: 0px;
}
/* media query for response  */
@media only screen and (max-width: 1144px) {
    .custom-crd {
        margin: 0 0 0 -6px;
    }
}
@media only screen and (max-width: 912px) {
    .custom-crd {
        margin: 0 0 0 -12px;
    }
}
@media only screen and (max-width: 768px) {
    .grid-margin {
        margin-left: 2.666667% !important;
    }
    .custom-crd {
        padding: 10px 15px;
        margin: 0px 40px 0 0px;
    }
    .stretch-card>.card {
    width: 100%;
    min-width: 0%;
    }
}
@media only screen and (max-width: 468px) {
    .grid-margin {
        margin-left: -0.3333% !important;
    }
    .custom-crd {
        padding: 10px 15px;
        margin: 0px 0px 0px 5px;
    }
}
</style>