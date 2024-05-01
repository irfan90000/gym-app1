<template id="app">
    <div class="row hero-section">
        <div class="col-md-4 grid-margin stretch-card offset-2 custom-main-box mt-5">
            <div class="card custom-crd" style="background: rgb(0, 0, 0, 0.6);margin-top:100px;">
                <div class="card-body">
                    <h4 class="card-title">Reset your password</h4>
                    <p class="text-white">Enter the email address associated with your account and we'll send you a link to reset your password.</p>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" v-model="form.email" class="form-control" placeholder="email">
                            <span v-if="errorMessage" class="error-message">{{ errorMessage }}</span>
                        </div>

                        <button class="btn btn-primary btn-block mt-5 me-2">Sent</button>
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
            },
            errorMessage: '' // Define errorMessage data propert
        }
    },

    methods: {
        async submit() {
            const response = await axios.post('/otp-sent', this.form);
            if (response.data.status == 200) {
                this.$router.push({
                    path: '/forgetPass',
                    query: {
                        email: response.data.email // Replace 'key' and 'value' with your actual data
                    }
                });
            } else {
                this.errorMessage = response.data.message;
            }
        }
    }
}
</script>
<style>

.error-message {
    color: red;
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
