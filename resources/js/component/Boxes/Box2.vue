<template style="background-color:black">
    <HeaderComponent />
    <main style="background-color: black;">
        <section class="ct-u-marginBottom40" style="margin-top: 180px">
            <div class="container">
                <div class="ct-progressBar">
                    <div class="ct-progressBar-content">
                        <div class="progress" style="margin-bottom: 121px;">
                            <div class="progress-bar animating" role="progressbar" data-percentage="91" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <div class="ct-progressBar-percent">
                                    <span>40%</span>
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
                                <article class="ct-news-item ct-news-item--type1" style="height: 342px;">
                                    <div class="ct-news-item-header">
                                        <h4 class="ct-news-item-headerText text-uppercase"><span>What is your height ? {{
                                            height }}</span></h4>
                                    </div>
                                    <div class="d-flex">
                                        <div class="input-group flex-nowrap mb-5" style="width: 24% !important;">
                                            <span style="color: white;font-size: 15px;">Imperial</span>
                                            <input type="radio" class="" :checked="impRange" v-model="height"
                                                aria-label="Username" aria-describedby="addon-wrapping"
                                                @click="checkValue('imp')">
                                        </div>
                                        <div class="input-group flex-nowrap mb-5" style="width: 24% !important;">
                                            <span style="color: white;font-size: 15px;">Matic</span>
                                            <input type="radio" class="" :checked="matRange" v-model="height"
                                                aria-label="Username" aria-describedby="addon-wrapping"
                                                @click="checkValue('mat')">
                                        </div>
                                    </div>
                                    <div class="ct-news-item-body">
                                        <div class="input-group flex-nowrap mb-5" v-if="checkval == 'imp'">
                                            <span style="color: white;font-size: 15px;">Inches</span>
                                            <input type="range" min="0" max="100" class="" v-model="height"
                                                aria-label="Username" aria-describedby="addon-wrapping" style="width: 300px;">
                                        </div>
                                        <div class="input-group flex-nowrap mb-5" v-if="checkval == 'mat'">
                                            <span style="color: white;font-size: 15px;">Centimeter</span>
                                            <input type="range" min="0" max="100" class="" v-model="height"
                                                aria-label="Username" aria-describedby="addon-wrapping" style="width: 300px;">
                                        </div>

                                        <div class="row">
                                            <Button @click="next()" class="btn btn-secondary button" style="margin-left: 5px;">Continue</Button>
                                        </div>
                                    </div>
                                </article>
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
            height: 0,
            checkval: 'imp',
            matRange: false,
            impRange: true
        }
    },
    components: {
        HeaderComponent,
        FooterComponent
    },
    methods: {
        checkValue(value) {
            this.checkval = value
            if (value == 'imp') {
                this.matRange = false
                this.impRange = true
            } else {
                this.impRange = false
                this.matRange = true
            }
        },
        next() {
            if (this.height != 0) {
            this.$store.commit('setHeight',this.height)
                router.push('/b3')
            } else {
                alert('Please Add Your Height');
            }
        }
    }
}
</script>
<style scope>
/* .button{
    margin-left: 200px;
    font-size: 13px;
    font-family: auto;
    background-color:#9a0606;
} */
</style>