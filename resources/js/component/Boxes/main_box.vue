<template>
    <HeaderComponent />
    <main style="background-color: black;">
        <section class="ct-u-marginBottom40" style="margin-top: 180px">
            <!-- <h3 class="pt-4 survey-header text-center mb-5" style="color: white;">Find out EXACTLY What Diet &amp; Training
                is Best For You</h3>
            <div class="container">
                <div class="ct-progressBar">
                    <div class="ct-progressBar-content">
                        <div class="progress" style="margin-bottom: 121px;">
                            <div class="progress-bar animating" role="progressbar" data-percentage="91" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                <div class="ct-progressBar-percent">
                                    <span>20%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>

        <section class="ct-js-news-container" data-height="325" data-background="#000"
            style="background-color: rgb(0, 0, 0); min-height: 325px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <article class="ct-news-item ct-news-item--type1" style="height: 342px;">
                            <div class="ct-news-item-header">
                                <h4 class="ct-news-item-headerText text-uppercase"><span>Welcome To Dojo</span></h4>
                            </div>

                            <div class="hero__card">
                                <p class="hero__text" style="color:white">Take the FREE Body Type quiz to find out exactly
                                    what diet
                                    and exercises will
                                    get you the
                                    best results! </p>
                                <div class="hero__cta-container d-flex">
                                    <a @click="firstroute()" class="btn btn-primary" style="color:white">
                                        <div class="hero__cta male">
                                            <span class="hero__cta-label">MALE</span>
                                            <span class="hero__cta-label">➔</span>
                                        </div>
                                    </a>
                                    <!-- href="/b1" -->
                                    <!-- href="/b1" -->
                                    <a @click="firstroute()" class="btn btn-primary" style="color:white">
                                        <div class="hero__ct  a female">
                                            <span class="hero__cta-label">FEMALE</span>
                                            <span class="hero__cta-label">➔</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <FooterComponent />
</template>
<script>
import FooterComponent from '../footer.vue';
import HeaderComponent from '../header.vue';
import router from '../../router.js';
export default {
    name: '',
    data() {
        return {
            age: ''
        }
    },
    components: {
        HeaderComponent,
        FooterComponent
    },
    methods: {
         firstroute() {
            var user_id = localStorage.getItem('user_id');
            if (user_id) {
                this.$router.push('/b1')
            } else {
                alert('Please Login First')
            }
        },
    }
}
</script>
<style scope></style>