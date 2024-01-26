<template id="app">
    <div class="row hero-section">
        <div class="col-md-6 grid-margin stretch-card offset-2 custom-main-box mt-5">
            <div class="card custom-crd" style="background: rgb(0, 0, 0, 0.6);margin-top:100px;">
                <div class="card-body">
                    <h4 class="card-title">Sign Up</h4>
                    <form class="forms-sample" @submit.prevent="submit">
                        <div class="form-group">
                            <label><h3>Password</h3></label>
                        <input
                        type="password"
                        id="old-password"
                        class="form-control"
                        placeholder=""
                        required />
                        </div>
                        <div class="form-group">
                            <label><h3>New Password</h3></label>
                        <input
                        type="password"
                        id="new-password"
                        class="form-control"
                        placeholder=""
                        required />
                        </div>
                        <div class="form-group">
                            <label><h3>Confirm Password</h3></label>
                        <input
                        type="password"
                        id="confirm-password"
                        class="form-control"
                        placeholder=""
                        required />
                        </div>
                        <button class="btn btn-primary btn-block mt-5 me-2" role="button">Save</button>
                        <button class="btn btn-primary btn-block mt-5 me-2" role="button">Cencle</button>
                        <hr />
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
// import axios from 'axios';
// export default {
//     name: 'app',
//     data() {
//         return {
//             form: {
//                 name: '',
//                 email: '',
//                 phone: '',
//                 address: '',
//                 password: ''
//             }
//         }
//     },
//     methods: {
//         async submit() {
//             const response = await axios.post('/signUp', this.form);
//             if(response.data.status == 200){
//                 localStorage.setItem("token",response.data.token);
//                 localStorage.setItem("user_id",response.data.user.id);
//                 this.$router.push("/theme");
//             }
//         }
//     }
// }
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