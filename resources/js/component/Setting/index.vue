<template>
    <div class="container-scroller">
      <sidebar />
      <div class="container-fluid page-body-wrapper"  style="background: #191c24;">
          <navbar />
          <div class="row col-12 mt-5">
              <div class="col-12 grid-margin stretch-card mt-5">
                  <div class="card mt-5"  style="background: #36445d;">
                      <div class="card-body">
                          <div class="row">
                              <h2 class="card-title col-11">Settings</h2>
                              <router-link to="add/setting" class="nav-link btn btn-primary col-1">Add</router-link>
                          </div>
                          
                          <div class="table-responsive">
                              <table class="table" style="margin:10px 0 40px 0">
                                  <thead>
                                      <tr>
                                          <th style="text-align: inherit; font-size: 18px;">Name</th>
                                          <th style="text-align: inherit; font-size: 18px;">Value</th>
                                          <th style="text-align: inherit; font-size: 18px;">Status</th>
                                          <th style="text-align: inherit; font-size: 18px;">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr v-for="setting in Settings">
                                          <td style="text-align: inherit; font-size: 18px;">{{setting.name}}</td>
                                          <td style="text-align: inherit; font-size: 18px;">{{setting.value}}</td>
                                          <td style="text-align: inherit; font-size: 18px;">{{setting.status}}</td>
                                          <td style="text-align: inherit; font-size: 18px;"><a @click="edit(setting.id)" class="btn btn-success">Edit</a>
                                          <a @click="del(setting.id)" class="btn btn-danger">Delete</a></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
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
  name:'index',
  data(){
        return{
            Settings:''
        }
    },
  components: {
      navbar,
      sidebar
  },
  methods:{
        async getSetting(){
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/settings',{headers});
            this.Settings = response.data;
        },
        async edit(id) {
            this.$router.push(`/edit/setting/${id}`);
        },
        async del(id){
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/delete/setting/'+id,{headers});
            this.getSetting();
        }
    },
    mounted(){
        this.getSetting();
    }
}
</script>
<style>
.table thead:before {
    background-color: #191c24;
}
.table-responsive {
    overflow-x: 0 !important;
}
th{
    font-size : 20px
}
</style>