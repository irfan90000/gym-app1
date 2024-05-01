<template id="app">
    <div class="row hero-section">
        <div class="col-md-4 grid-margin stretch-card offset-2 custom-main-box mt-5">
            <div class="card custom-crd" style="background: rgb(0, 0, 0, 0.6);margin-top:100px;">
                <div class="card-body p-0">
                    <h4 class="card-title">Reset Your Password</h4>
                    <h6 class="text-white">Check your email for 4 digit otp.</h6>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" readonly v-model="form.email" class="form-control"
                                   placeholder="Email">
                        </div>

                        <div class="form-group mt-5">
                            <label>4 Digit Opt</label>
                            <input type="text" pattern="\d{4}" title="Please enter a four-digit number" v-model="form.otp" class="form-control" placeholder="">
                        </div>
                        <div class="error-message" v-if="errorMessage">
                            <p>{{ errorMessage }}</p>
                        </div>
                        <div class="form-group mt-5">
                            <label>New Password</label>
                            <input
                                type="password"
                                id="new-password"
                                v-model="form.password"
                                name="password"
                                class="form-control"
                                placeholder="New Password"
                                required/>
                        </div>
                        <div class="error-message" v-if="errors.password">
                            <p>{{ errors.password[0] }}</p>
                        </div>
                        <button class="btn btn-primary btn-block mt-5 me-2">Submit</button>
                        <hr/>
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
                otp: '',
                password: '',
            },
            errors: {},
            errorMessage: ''
        }
    },
    mounted() {
        this.form.email = this.$route.query.email
    },
    methods: {

        // async submit(){
        //
        //     await this.axios.post('/reset-password',this.form).then(response=>{
        //         this.$router.push('/login')
        //     }).catch(error=>{
        //         console.log(error)
        //     })
        // }
        async submit() {
            try {
                const response = await axios.post('/reset-password', this.form);
                if (response.data.status == 200) {
                    this.$router.push({
                        path: '/login',
                        query: {
                            message: 'Password reset successfully' // Replace 'key' and 'value' with your actual data
                        }
                    });
                } else {
                    this.errorMessage = response.data.message;
                    console.log(this.errorMessage)
                }
            } catch (error) {
                // Handle error
                console.error('An error occurred:', error);
                // Optionally, you can set an error message for display to the user
                this.errorMessage = 'An error occurred while resetting password. Please try again later.';

                // Handle validation errors
                if (error.response && error.response.status === 422) {
                    this.errors = error.response.data.errors;
                }
            }
        }


        // async submit() {
        //     const response = await axios.post('/reset-password', this.form);
        //     if (response.data.status == 200) {
        //         this.$router.push('/login');
        //     } else {
        //         this.errorMessage = response.data.message;
        //     }
        // }
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
