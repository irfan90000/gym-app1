<template>
    <HeaderComponent />
    <main style="background-color: black;">
        <section class="ct-u-marginBottom40" style="margin-top: 180px">
            <h3 class="pt-4 survey-header text-center mb-5" style="color: white;">Find out EXACTLY What Diet &amp; Training
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
            </div>
        </section>

        <section class="ct-js-news-container" data-height="325" data-background="#000"
            style="background-color: rgb(0, 0, 0); min-height: 325px;">
            <div class="container">
                <div class="ct-news">
                    <div class="ct-js-news-row ct-news-row">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-6">
                                <h2 class="survey-subheader text-center my-4 p-2" style="color: white;">What is your age
                                    range?</h2>
                                <div class="container p-3">
                                    <div class="row">
                                        <div class="col-4 col-md-4 offset-md-1 mx-auto mb-4">
                                            <a href="#" @click="selectAge('teens')" aria-label="teens"><img
                                                    class="img-fluid"
                                                    src="https://d12hfwo7xdmxn8.cloudfront.net/salespages/survey/img/female-cpc-18-20-gray.png"
                                                    alt="teens" test-id="teensButtonFemale"></a>
                                        </div>
                                        <div class="col-4 col-md-4 offset-md-1 mx-auto mb-4">
                                            <a href="#" @click="selectAge('20s')" aria-label="20s"><img class="img-fluid"
                                                    src="//d18bl4bud716l6.cloudfront.net/survey/img/women-20.png"
                                                    alt="20s test-id="></a>
                                        </div>
                                        <div class="col-4 col-md-4 offset-md-1 mx-auto mb-4">
                                            <a href="#" @click="selectAge('30s')" aria-label="30s"><img class="img-fluid"
                                                    src="//d18bl4bud716l6.cloudfront.net/survey/img/women-30.png" alt="30s"
                                                    test-id="30sButtonFemale"></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="col-4 col-md-4 offset-md-1 mx-auto mb-4">
                                            <a href="#" @click="selectAge('40s')" aria-label="40s"><img class="img-fluid"
                                                    src="//d18bl4bud716l6.cloudfront.net/survey/img/women-40.png" alt="40s"
                                                    test-id="40sButtonFemale"></a>
                                        </div>
                                        <div class="col-4 col-md-4 offset-md-1 mx-auto mb-4">
                                            <a href="#" @auxclick="selectAge('50s')" aria-label="50s"><img class="img-fluid"
                                                    src="//d18bl4bud716l6.cloudfront.net/survey/img/women-50.png" alt="50s"
                                                    test-id="50sButtonFemale"></a>
                                        </div>
                                        <div class="col-4 col-md-4 offset-md-1 mx-auto mb-4">
                                            <a href="#" @click="selectAge('60s')" aria-label="60s"><img class="img-fluid"
                                                    src="//d18bl4bud716l6.cloudfront.net/survey/img/women-60.png" alt="60s"
                                                    test-id="60sButtonFemale"></a>
                                        </div>
                                    </div>
                                    <div class="row" style="justify-content: flex-end;">
                                        <Button @click="next()" class="btn btn-secondary button">Continue</Button>
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
            age: ''
        }
    },
    components: {
        HeaderComponent,
        FooterComponent
    },
    methods: {
        selectAge(value) {
            this.age = value;
            this.$store.commit('setAge',value)
            if(value){
                router.push('/b2')
            }
        },
        next(){
            if(this.age != ''){
                router.push('/b2')
            }else{
                alert('Please Select the age');
            }
        }
    }
}
</script>
<style scope>

</style>