<template>
    <HeaderComponent />
    <main style="background-color: black;">
        <section class="ct-u-marginBottom40" style="margin-top: 180px">
            <h3 class="pt-4 survey-header text-center mb-5" style="color: white;">FIND OUT EXACTLY WHAT DIET & TRAINING IS
                BEST FOR YOU</h3>
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
                                <h2 class="survey-subheader text-center my-4 p-2" style="color: white;">How active are you?
                                </h2>
                                <div class="container p-3">
                                    <div class="container p-3">
                                        <div class="row">
                                            <div class="col-6 col-md-4 offset-md-1 mx-auto mb-4">
                                                <a href="#" test-id="activityLightFemale" @click="selectActivity('light')"
                                                    aria-label="Lightly Active"><img class="img-fluid"
                                                        src="//d18bl4bud716l6.cloudfront.net/survey/img/lightly-active.png"
                                                        alt="Lightly Active"></a>
                                            </div>
                                            <div class="col-6 col-md-4 offset-md-1 mx-auto mb-4">
                                                <a href="#" test-id="activityModerateFemale"
                                                    @click="selectActivity('moderate')" aria-label="Moderately Active"><img
                                                        class="img-fluid"
                                                        src="//d18bl4bud716l6.cloudfront.net/survey/img/moderately-active.png"
                                                        alt="Moderately Active"></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-4 offset-md-1 mx-auto mb-4">
                                                <a href="#" test-id="activityVeryFemale" @click="selectActivity('very')"
                                                    aria-label="Very Active"><img class="img-fluid"
                                                        src="//d18bl4bud716l6.cloudfront.net/survey/img/very-active.png"
                                                        alt="Very Active"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <Button @click="next()" class="btn btn-secondary ">Continue</Button>
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
export default {
    name: '',
    data() {
        return {
            activity: ''
        }
    },
    components: {
        HeaderComponent,
        FooterComponent
    },
    methods: {
        selectActivity(value) {
            this.activity = value;
            this.$store.commit('setActivity',this.activity)
            if (value) {
                router.push('/b5')
            }
        },
        next() {
            if (this.activity != '') {
                router.push('/b2')
            } else {
                alert('Please Select the activity');
            }
        }
    }
}
</script>
