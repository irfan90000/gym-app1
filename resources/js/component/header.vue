<template>
  <header class="ct-mainHeader">
    <div class="ct-topBar ct-topBar--type1">
      <div class="navbar navbar-default" style="margin-left: -380px;">
        <div class="container">
          <div class="navbar-block navbar-left">
            <div>
              <img class="grayscale grayscale-fade" src="./../../public/assets/images/content/logo-footer-btm.jpeg" alt="" style="width: 85px; margin-right: 10px;">
            </div>
            <div class="navbar-block-inner">
              <ul class="list-unstyled list-inline">
                <li><span>Call Us Now <a href="tel:1234567890">123 456 789 - 0</a></span></li>
                <li><span><a href="mailto:info@dojo.com">info@dojo.com</a></span></li>
              </ul>
            </div>
          </div>

          <div class="navbar-block navbar-right">
            <div class="navbar-block-inner">
              <ul class="socialicons">
                <li>
                  <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom" title=""
                    data-original-title="Facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>

                <li>
                  <a href="https://twitter.com/createitpl" data-toggle="tooltip" data-placement="bottom" title=""
                    data-original-title="Twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>

                <li>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="LinkedIn">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>

                <li>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="RSS">
                    <i class="fa fa-rss"></i>
                  </a>
                </li>

                <li>
                  <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Vimeo">
                    <i class="fa fa-vimeo-square"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-default navbar--type1 yamm navbar-logo--left" style="margin-left: -500px;">
      <div class="container ct-navbar-container">

        <div class="navbar-header navbar-left">
          <a class="navbar-brand" href="index.html">
            <!-- <img alt="Brand" src="./../../public/assets/images/content/logo.png"> -->
          </a>
        </div>

        <ul class="nav navbar-nav ct-navbar--fadeIn navbar-right" style="display: contents;">
          <li class="onepage active"><a href="#home">Home</a></li>
          <li class="onepage"><a href="#testimonials">Testimonials</a></li>
          <li class="onepage"><a href="#trainers">Trainers</a></li>
          <li class="onepage"><a href="#calendars">Calendar</a></li>
          <li class="onepage"><a href="#callToAction">Call To Action</a></li>
          <li class="onepage"><a href="#services">Services</a></li>
          <li class="onepage"><a href="#gallery">Gallery</a></li>
            <router-link v-if="token == null" to="/signUp">SignUp</router-link>
          <li class="onepage">
            <!-- <a @click="login">Login</a> -->
            <!-- <router-link to="/login">Login</router-link> -->

            <router-link v-if="token == null" to="/login">Login</router-link>
            <!-- <router-link @click="logout">Logout</router-link> -->
            <a href="" @click="logout" v-if="token != null">Logout</a>
          </li>

        </ul>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'HelloWorld',
  data(){
    return {
      token:null
    }
  },
  components: {

  },
  methods: {
    login() {
      this.$router.push('/login')
    },
    async logout() {
      localStorage.clear()
      this.$router.push('/')
    }
  },
  mounted(){
    this.token = localStorage.getItem('token');
  }
}
</script>

