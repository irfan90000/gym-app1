<template id="app">
    <div class="row hero-section">
        <div class="col-md-4 grid-margin stretch-card offset-2 custom-main-box">
            <div class="card custom-crd" style="background: rgb(0, 0, 0, 0.6);">
                <div class="card-body p-0">
                    <h4 class="card-title">Login</h4>
                    <div class="py-1 text-success" v-if="message">{{ message }}</div>
                    <form class="forms-sample" @submit.prevent="submit">

                        <div class="form-group input-group-sm">
                            <label>Email</label>
                            <input type="email" name="email" v-model="form.email" class="form-control"
                                   placeholder="Email"
                            >
                        </div>
                        <div class="form-group input-group-sm mt-5">
                            <label>Password</label>
                            <input type="password" name="password" v-model="form.password" class="form-control"
                                   placeholder="Password">
                        </div>
                        <router-link to="/reset">Forgot Password</router-link>
                        <button class="btn btn-primary btn-sm btn-block mt-4 me-2"><h4>Submit</h4></button>
                    </form>
                     <div class="mt-3"><span class="text-white">Don't have an account?</span> <router-link to="/signUp">Sign up</router-link>
                         </div>
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
            },
            message: ''
        }
    },
    mounted() {
        this.message = this.$route.query.message
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
form label {
    font-size: larger;
    margin-top: -28px;
    margin-left: -16px;
    color: white;
}

.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),
    url(../../public/assets/images/content/bg-gym-login.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 100vh;
}

.offset-2 {
    margin-left: 25.666667% !important;
}

.custom-main-box {
    margin: 120px auto;
    height: 100%;
}

.custom-crd {
    padding: 15px;
    margin: 0px;
}

.card-title {
    text-align: center;
    color: white;
    font-weight: 500;
    font-size: 28px;
}

.forms-sample {
    padding-top: 25px;
}

.me-2 {
    font-size: 16px !important;
    padding: 7px 0 !important;
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

    .stretch-card > .card {
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
