<template id="app">

    <div class="row hero-section">
        <div class="col-md-6 grid-margin stretch-card offset-2 custom-main-box mt-5">
            <div class="card custom-crd" style="background: rgb(0, 0, 0, 0.6);margin-top:100px;">
                <div class="card-body">
                    <h4 class="card-title mb-5">Sign Up</h4>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group mt-5">
                            <label>Username</label>
                            <input type="text" name="name" required v-model="form.username" class="form-control"
                                   placeholder="Name"
                                   style="height: 32px;">
                            <div class="error-message" v-if="errors.username">
                                <p>{{ errors.username[0] }}</p>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <label>Email</label>
                            <input type="email" name="email" required v-model="form.email" class="form-control"
                                   placeholder="Email"
                                   style="height: 32px;">
                            <div class="error-message" v-if="errors.email">
                                <p>{{ errors.email[0] }}</p>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <label>Phone</label>
                            <input type="number" name="phone" required v-model="form.phone" class="form-control"
                                   placeholder="Phone"
                                   style="height: 32px;">
                            <div class="error-message" v-if="errors.phone">
                                <p>{{ errors.phone[0] }}</p>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <label>Password</label>
                            <input type="password" name="password" required v-model="form.password" class="form-control"
                                   placeholder="Password" style="height: 32px;">
                            <div class="error-message" v-if="errors.Password">
                                <p>{{ errors.Password[0] }}</p>
                            </div>
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
                username: '',
                email: '',
                phone: '',
                password: ''
            },
            errors: {}
        }
    },
    methods: {

        async submit() {
            try {
                const response = await axios.post('/signUp', this.form);
                if (response.data.status == 200) {
                    this.$router.push({
                        path: '/login',
                        query: {
                            message: 'Sign Up is completed successfully' // Replace 'key' and 'value' with your actual data
                        }
                    });
                }

            } catch (error) {

                if (error.response && error.response.status === 422) {
                    this.errors = error.response.data.errors;
                }
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
