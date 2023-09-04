<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper"  style="background: #191c24;">
            <navbar />
            <div class="row col-12 mt-5">
                <div class="col-10 grid-margin stretch-card mt-5">
                    <div class="card mt-5"  style="background: #191c24;">
                        <div class="card-body">
                            <h2 class="card-title">Add Category</h2>
                            <form class="forms-sample" @submit.prevent="submit($event)">
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" name="name" v-model="form.name" class="form-control" id="exampleInputUsername1"
                                        placeholder="Username">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Value</label>
                                    <input type="text" name="value" v-model="form.value" class="form-control" id="exampleInputUsername1"
                                        placeholder="Value">
                                </div>
                                <div class="form-check">
                                    <label class="label"> Status </label>
                                    <input type="checkbox" v-model="form.status" class="form-check-input" style=" margin-left: 6px; margin-top: 3px;">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import sidebar from '../../sidebar.vue';
import navbar from '../../navbar.vue';
import axios from 'axios';
export default {
    name: 'add',
    data(){
        return{
            errors: [],
            form:{
                namee:'',
                value:'',
                status:''
            }
        }
    },
    components: {
        navbar,
        sidebar
    },
    methods:{
        async submit(e) {
            this.errors = [];
            if (!this.form.name) {
                this.errors.push('Name required.');
                return;
            }
            if (!this.form.value) {
                this.errors.push('Value required.');
                return;
            }

            e.preventDefault();
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.post('/add/setting', this.form,{headers});
            if (response.data.status == 200) {
                this.$router.push('/settings')
            }

        }
    }
}
</script>

<style scope>
.form-group {
    border-bottom: 1px solid #2c2e33;
    padding-bottom: 0.8rem;
    margin-bottom: 0.8rem;
}

form .lable{
    color: white;
    font-size: 17px !important;
    margin-left: 1px;
}
</style>