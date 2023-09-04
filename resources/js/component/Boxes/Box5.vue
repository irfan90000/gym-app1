<template>
    <HeaderComponent />
    <main style="background-color: black;">
        <section class="ct-u-marginBottom40" style="margin-top: 180px">
            <h3 class="pt-4 survey-header text-center mb-5" style="color: white;">FIND OUT EXACTLY WHAT DIET & TRAINING IS BEST FOR YOU
</h3>
            <div class="container">
                <div class="ct-progressBar">
                    <div class="ct-progressBar-content">
                        <div class="progress" style="margin-bottom: 121px;">
                            <div class="progress-bar animating" role="progressbar" data-percentage="91" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                <div class="ct-progressBar-percent">
                                    <span>80%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ct-js-news-container" data-height="325" data-background="#000"
            style="background-color: rgb(0, 0, 0); min-height: 325px;">
            <div class="container">
                <div class="ct-news">
                    <div class="ct-js-news-row ct-news-row">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-6">
                                <h2 class="survey-subheader text-center my-4 p-2" style="color: white;">Which best describes you?
                                </h2>
                                <div class="container p-3">
                                    <div class="container p-3">
                                        <div class="row">
                                            <div class="col-6 col-md-4 offset-md-1 mx-auto mb-4">
                                                <a href="#" test-id="femaleGetToned"
                                                    @click="selectCondition('femaleGetToned')"
                                                    aria-label="I'm soft, I need to lose 5-10lbs, tone up my stomach, butt, and arms">
                                                    <img class="img-fluid"
                                                        src="//d18bl4bud716l6.cloudfront.net/survey/img/female-answer-1.png"
                                                        alt="I'm soft, I need to lose 5-10lbs, tone up my stomach, butt, and arms">
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-4 offset-md-1 mx-auto mb-4">
                                                <a href="#" test-id="femaleFatLoss"
                                                    @click="selectCondition('femaleFatLoss')"
                                                    aria-label="I have 20lbs or more of fat that I need to lose while building sexy muscle">
                                                    <img class="img-fluid"
                                                        src="//d18bl4bud716l6.cloudfront.net/survey/img/female-answer-2.png"
                                                        alt="I have 20lbs or more of fat that I need to lose while building sexy muscle">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-4 offset-md-1 mx-auto mb-4">
                                                <a href="#" test-id="femaleSkinnyFat"
                                                    @click="selectCondition('femaleSkinnyFat')"
                                                    aria-label="I'm skinny, I need to add toned muscle while burning stubborn fat in certain areas">
                                                    <img class="img-fluid"
                                                        src="//d18bl4bud716l6.cloudfront.net/survey/img/female-answer-3.png"
                                                        alt="I'm skinny, I need to add toned muscle while burning stubborn fat in certain areas">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
import axios from 'axios';
export default {
    name: '',
    data() {
        return {
            bestActivity: ''
        }
    },
    components: {
        HeaderComponent,
        FooterComponent
    },
    methods: {
      async selectCondition(value) {
            this.bestActivity = value;
            this.$store.commit('seBestActivity',this.bestActivity)
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.post('/add/health/', this.$store.state.health,{headers});
            if (value) {
                router.push('/b6')
            }
        },
    },
}
</script>
<style scope>.button {
    /* margin-left: 230px;
    font-size: 13px;
    font-family: auto;
    background-color: #9a0606; */
}</style>