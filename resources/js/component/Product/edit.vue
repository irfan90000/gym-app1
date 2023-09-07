<template>
    <div class="container-scroller">
        <sidebar />
        <div class="container-fluid page-body-wrapper">
            <navbar />
            <div class="row col-12 mt-5" style="background-color: #191C24;">
                <div class="col-10 grid-margin stretch-card mt-5">
                    <div class="card mt-5 card-design">
                        <div class="card-body">
                            <h4 class="card-title">Edit Product</h4>
                            <form class="forms-sample" @submit.prevent="submit($event)">
                                <ul>
                                    <li style="color: white;" v-for="error in errors">{{ error }}</li>
                                </ul>
                                <label for="" class="lable">Select Category</label>
                                <select class="form-select" style="background-color: #191C24" @change="updateSelectedCategory">
                                    <option>Select Category</option>
                                    <option v-for="category in categories" :value="category.id">
                                        {{ category.name }}
                                    </option>
                                </select>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input type="text" name="name" v-model="form.name" class="form-control"
                                        id="exampleInputUsername1" placeholder="Name">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Tilte</label>
                                    <input type="text" name="title" v-model="form.title" class="form-control"
                                        id="exampleInputUsername1" placeholder="Title">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="" class="label">Image</label>
                                    <input type="file" name="image" @change="" class="form-control"
                                        id="" placeholder="Image">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="">File</label>
                                    <input type="file" name="file" @change="" class="form-control"
                                        id="" placeholder="File">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Price</label>
                                    <input type="number" name="price" v-model="form.price" class="form-control"
                                        id="exampleInputUsername1" placeholder="Price">
                                </div>
                                <div class="form-group mt-5">
                                    <label for="exampleInputUsername1">Description</label>
                                    <textarea type="number" name="description" v-model="form.description" class="form-control"
                                        id="exampleInputUsername1" row="5" placeholder="Description"></textarea>
                                </div>
                                <div class="form-check d-flex">
                                    <label class="label" style="margin-top: -10px;"> Status </label>
                                    <input type="checkbox" v-model="form.status" class="" style="margin-left: 13px;margin-top: -20px;">
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
    name: 'edit',
    data() {
        return {
            errors: [],
            imageArray: [],
            pdfArray: [],
            maxImages: 5,
            selectedCategory:'',
            form: {
                name: '',
                title: '',
                price: '',
                status: '',
                description:''
            },
            categories:''

        }
    },
    components: {
        navbar,
        sidebar
    },
    methods: {
        async updateSelectedCategory(event){
            this.selectedCategory = event.target.value;
        },
        async getCategory() {
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/category',{headers});
            if(response.data){
                this.categories = response.data;
            }
        },
       async edit(){
        const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };

            const response = await axios.get('/edit/product/'+this.$route.params.id,{headers});
            if(response.data){
                this.form.name = response.data.name;
                this.form.title = response.data.title;
                this.form.price = response.data.price;
                this.form.description = response.data.description;
            }
        },
       async submit(e) {  
        this.errors = [];
            if (!this.form.name) {
                this.errors.push('Name required');
                return;
            }
            if (!this.form.title) {
                this.errors.push('Title required');
                return;
            }
            if (!this.form.price) {
                this.errors.push('Price required');
                return;
            }
            if (!this.selectedCategory) {
                this.errors.push('Category required');
                return;
            }
            // if (!this.form.files) {
            //     this.errors.push('Files required');
            //     return;
            // }
            // if (!this.form.images) {
            //     this.errors.push('Images required');
            //     return;
            // }
            if (!this.form.description) {
                this.errors.push('Description required');
                return;
            }
            e.preventDefault();
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const config = {
                headers: {
                    'content-type': 'multipart/form-data',
                    'Authorization': `Bearer ${token}`
                }
            }
            const response = await axios.post('update/product/'+this.$route.params.id,this.form,config);
            if(response.data.status == 200){
                this.$router.push('/product')
            }
        },
        uploadFile(e) {
            var files = e.target.files;
            const filesArr = Array.from(files);

            filesArr.forEach((file) => {
                if (!file.type.match('pdf.*') || this.imageArray.length >= this.maxImages) {
                    return;
                }
                this.pdfArray.push({
                    name: file.name,
                    url: URL.createObjectURL(file),
                    file: file,
                });
                this.form.files = this.pdfArray
            });
        },
        handleFileChange(event) {
            var files = event.target.files;
            const filesArr = Array.from(files);

            filesArr.forEach((file) => {
                if (!file.type.match('image.*') || this.imageArray.length >= this.maxImages) {
                    return;
                }
                this.imageArray.push({
                    name: file.name,
                    url: URL.createObjectURL(file),
                    image: file,
                });
                this.form.images = this.imageArray
            });
        },
        removeImage(index) {
            this.imageArray.splice(index, 1);
        },
    },
    mounted(){
        this.edit();
        this.getCategory();
    }
}
</script>
<style scope>
.form-group mt-5 {
    border-bottom: 1px solid #2c2e33;
    padding-bottom: 0.8rem;
    margin-bottom: 0.8rem;
}
.card-design{
    background: #191c24 !important;
}
form label{
    margin-top: -28px;
    margin-left: -16px;
}
form input {
    height: 32px;
}
form .lable{
    color: white;
    font-size: 17px;
    margin-left: 1px;
}
</style>
