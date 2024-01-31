<template>
    <section id="services" class="section ct-u-paddingTop200 section_6"
        data-background="./../../public/assets/images/content/BG01.png"
        style="background-image: url(&quot;assets/images/content/BG01.png&quot;); display: block; position: relative; float: none;">
        
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <article class="ct-pricingTable">
                <div class="ct-pricingTable-image">
                  <img src="./../../public/assets/images/content/iconBox04.png" alt="icon">
                </div>


                <div class="ct-pricingTable-price">
                  <h5>{{ Program_Products.name }}</h5>
                </div>

                <p class="ct-pricingTable-text">
                  {{ Program_Products.Title }}
                </p>
                <hr>
                <p class="ct-pricingTable-text">
                  {{ Program_Products.description }}
                </p>

                <div class="text-center ct-u-marginTop80"  v-if="token != null">
                  <a class="btn ct-btn--o btn-default" @click="download(Program_Products.id)"><span>Download</span></a>
                </div>

              </article>
            </div>

            <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
              <article class="ct-pricingTable ct-pricingTable-primary">
                <div class="ct-pricingTable-image">
                  <img src="./../../public/assets/images/content/iconBox05.png" alt="icon">
                </div>
                <div class="ct-pricingTable-price">
                  <h5>{{ Subs_Products.name }}</h5>
                </div>

                <p class="ct-pricingTable-text">
                  {{ Subs_Products.Title }}
                </p>
                <p class="ct-pricingTable-text">
                  {{ Subs_Products.description }}
                </p>

                <div class="text-center ct-u-marginTop60" v-if="token != null">
                  <a class="btn ct-btn--c btn-default" @click="download(Subs_Products.id)"><span>Download</span></a>
                </div>
              </article>
            </div>

            <div class="col-lg-3 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <article class="ct-pricingTable">
                <div class="ct-pricingTable-image">
                  <img src="./../../public/assets/images/content/iconBox06.png" alt="icon">
                </div>

                <h3 class="ct-pricingTables-header"><span>gym only</span>
                  <small><span>access to the gym</span></small>
                </h3>

                <div class="ct-pricingTable-price">
                  <span>$12<span>/ month</span></span>
                </div>

                <p class="ct-pricingTable-text">
                  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                </p>

                <ul class="ct-pricingTable-list">
                  <li>
                    Fifo - Fly in / fly out
                  </li>
                  <li>
                    train 24hrs/day
                  </li>
                  <li>
                    1 isotonic drink free
                  </li>
                </ul>

                <div class="text-center ct-u-marginTop40">
                  <a href="#" class="btn ct-btn--o btn-default"><span>choose</span></a>
                </div>
              </article>
            </div>
          </div>
        </div>

      </section>
</template>

<script>

import FooterComponent from './footer.vue';
import HeaderComponent from './header.vue';
import axios from 'axios';
export default {

  name: 'HelloWorld',
  data() {
    return {
      Program_Products: [],
      Subs_Products: [],
      token:null
    }
  },
  components: {
    HeaderComponent,
    FooterComponent,
  },
  methods: {
    async getProductSubs() {
      const token = localStorage.getItem('token'); // Replace with your actual authentication token
      const headers = {
        'Authorization': `Bearer ${token}`
      };
      const response = await axios.get('/product/subscription', { headers });
      this.Subs_Products = response.data;
    },
    async firstroute() {
      var user_id = localStorage.getItem('user_id');
      if (user_id) {
        this.$router.push('/b1')
      } else {
        alert('Please Login First')
      }
    },
    async getProductProgram() {
      const token = localStorage.getItem('token'); // Replace with your actual authentication token
      const headers = {
        'Authorization': `Bearer ${token}`
      };
      const response = await axios.get('/product/program', { headers });
      this.Program_Products = response.data;
    },
    async download(id) {
      const token = localStorage.getItem('token'); // Replace with your actual authentication token
      const headers = {
        'Authorization': `Bearer ${token}`
      };
      const response = await axios.get('/download/product/all/file/' + id, {
        responseType: 'blob',
        headers :headers 
      });
      var fileURL = window.URL.createObjectURL(new Blob([response.data]));
      var fileLink = document.createElement('a');

      fileLink.href = fileURL;
      fileLink.setAttribute('download', 'file.pdf');
      document.body.appendChild(fileLink);

      fileLink.click();
    },

  },
  mounted() {
    this.getProductProgram();
    this.getProductSubs();
    this.token = localStorage.getItem('token');
  },
}
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}</style>
