<template>
    <HeaderComponent />
    <main style="background-color: black;">
        <section class="ct-js-news-container" data-height="325" data-background="#000"
            style="background-color: rgb(0, 0, 0); min-height: 325px; margin-top: 236px;">
            <div class="container">
                <div class="ct-news">
                    <div class="ct-js-news-row ct-news-row">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-6">
                                <div class="container p-3">
                                    <button class="btn btn-primary" style="margin-left: 620px;" @click="next()">Back</button>
                                    <!-- <div class="ct-mediaSection-video"> -->
                                        <video muted="" loop="" autoplay="autoplay" preload="auto" style="width: 705px; margin-left:-100px; margin-top: -31px;">
                                            <source src="http://127.0.0.1:8000/video.mp4" type="video/mp4">
                                            <!-- <source src="http://dojo.html.themeforest.createit.pl/assets/videos/video.webm" type="video/webm"> -->
                                        </video>
                                    <!-- </div> -->
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
            if (value) {
                router.push('/b2')
            }
        },
        next() {
            router.push('/')
        }
    }
}
</script>
<style scope>
.button {
    margin-left: 200px;
    font-size: 13px;
    font-family: auto;
    background-color: #9a0606;
}
</style>