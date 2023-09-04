<template>
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
                                        <h4 class="ct-news-item-headerText text-uppercase"><span>What is your Weight ? {{
                                            weight }}</span></h4>
                                    </div>
                                    <div class="ct-news-item-body">
                                        <div class="input-group flex-nowrap mb-5" v-if="checkval == 'imp'">
                                            <span style="color: white;font-size: 15px;">Weight</span>
                                            <input type="range" min="0" max="7" v-model="weight"
                                                aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="row">
                                            <Button @click="next()" class="btn btn-secondary">Continue</Button>
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
            weight: 0,
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
        next() {
            if (this.weight != 0) {
            this.$store.commit('setWeight',this.weight)
                router.push('/b4')
            } else {
                alert('Please Add Your Weight');
            }
        }
    }
}
</script>
