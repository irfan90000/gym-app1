<template>
    <HeaderComponent/>
    <!--  <body class="cssAnimate ct-onepage">-->

    <div class="ct-preloader animated fadeOut" style="display: none; z-index: -9999;">
        <div class="ct-preloader-content animated fadeOut"></div>
    </div>

    <div class="navbar-block navbar-right toggleButton">
        <div class="navbar-block-inner">
            <div id="nav-icon" class="nav-icon--right">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <!--    <Header/>-->

        <main>
            <!-- Modal 1 -->
            <div class="modal fade ct-modal" id="modal1" tabindex="-1" role="dialog">
                <div class="modal-dialog ct-modalDialog" style="height: 507.4px;">
                    <div class="modal-content ct-modalContent">
                        <div class="modal-header ct-modalHeader">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×ksnsdfnsdlfndlkfn</span></button>
                            <h2 class="ct-headline text-center">

                            </h2>
                        </div>
                        <div class="modal-body ct-modalBody">
                            <div class="ct-modalBody-header ct-u-marginBottom60">
                                <h4 class="text-center ct-fw-700 text-uppercase ct-ff-2"><span>Join to The Team</span>
                                </h4>
                                <p class="text-center">
                                    Fill in the contact form if you want join us.
                                </p>
                            </div>

                            <div class="ct-modalBody-content">

                                <div class="successMessage alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                    <strong>Success!</strong> Congratulation, mission success
                                </div>

                                <div class="errorMessage alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                    <strong>Danger!</strong> You did something wrong
                                </div>

                                <form data-email-subject="Form Subject" class="ct-form--inverse validateIt" role="form"
                                      action="./../../public/assets/form/send.php" method="POST">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ct-u-marginBottom30">
                                                <input type="text" class="form-control" id="modalFirstName"
                                                       placeholder="First Name" required=""
                                                       name="field[]">
                                                <label class="sr-only" for="modalFirstName">First Name</label>
                                            </div>

                                            <div class="form-group ct-u-marginBottom30">
                                                <input type="text" class="form-control" id="modalLastName"
                                                       placeholder="Last Name" required=""
                                                       name="field[]">
                                                <label class="sr-only" for="modalLastName">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ct-u-marginBottom30">
                                                <input type="email" class="form-control" id="modalEmail"
                                                       placeholder="E-mail" required=""
                                                       name="field[]">
                                                <label class="sr-only" for="modalEmail">E-mail</label>
                                            </div>

                                            <div class="form-group ct-u-marginBottom30">

                                                <select class="form-control" id="modalCategories" required=""
                                                        name="field[]">
                                                    <option value="">KICK BOXING</option>
                                                    <option value="BOXING">BOXING</option>
                                                    <option value="Higgs Training">Higgs Training</option>
                                                    <option value="JUI-JITSU">JUI-JITSU</option>
                                                    <option value="KUNG-FU">KUNG-FU</option>
                                                </select>
                                                <label class="sr-only" for="modalCategories">Categories</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit"
                                                    class="btn btn-block btn-sm ct-btn--c btn-default">
                                                <span>Submit</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="modal-footer ct-modalFooter">
                            <p class="text-center ct-u-marginBottom0">
                                or
                            </p>
                            <p class="text-center ct-u-marginBottom30">
                                contact Laura via
                            </p>

                            <div class="ct-divider"></div>

                            <div class="text-center ct-u-paddingTop20 ct-u-marginBottom30">
                                <ul class="socialicons socialicon--blackHover">
                                    <li>
                                        <a href="https://www.facebook.com/createITpl" data-toggle="tooltip"
                                           data-placement="bottom" title=""
                                           data-original-title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/createitpl" data-toggle="tooltip"
                                           data-placement="bottom" title=""
                                           data-original-title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                           data-original-title="LinkedIn">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                           data-original-title="RSS">
                                            <i class="fa fa-rss"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                           data-original-title="Vimeo">
                                            <i class="fa fa-vimeo-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="home" class="section section_1" style="display: block; position: relative; float: none;">

                <div class="ct-mediaSection" data-height="865" data-type="video"
                     data-background-mobile="./../../public/assets/images/content/stopYellingBG01.jpg"
                     style="background-image: url(&quot;&quot;); min-height: 865px;">
                    <div class="ct-mediaSection-video">
                        <video muted="" loop="" autoplay="autoplay" preload="auto">
                            <source src="http://127.0.0.1:8000/video.mp4" type="video/mp4">
                            <!-- <source src="http://Higgs Training.html.themeforest.createit.pl/assets/videos/video.webm" type="video/webm"> -->
                        </video>
                    </div>
                    <div class="ct-mediaSection-inner">
                        <!--            <div class="container">-->
                        <!--            <div class="row">-->
                        <!--            <div class="col-lg-7 col-lg-offset-5">-->
                        <!--            <section class="ct-js-slick ct-slick ct-u-marginBottom30 ct-slick-arrow&#45;&#45;type1 ct-slick-dots&#45;&#45;type1" data-autoplay="false" data-arrows="true" data-dots="true" data-items="1" data-height="865">-->
                        <!--            <div class="item ct-u-colorWhite text-uppercase text-center ct-fw-700">-->
                        <!--            <div class="item-inner">-->
                        <!--            <span class="h2">Stop</span><br />-->
                        <!--            <span class="h1">Yelling </span><span class="h2">start</span><br />-->
                        <!--            <span class="h1">fighting</span>-->

                        <!--            <div class="text-center ct-u-marginTop70">-->
                        <!--            <a href="single-classes.html" class="btn ct-btn&#45;&#45;o btn-default"><span>join Higgs Training</span></a>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            <div class="item ct-u-colorWhite text-uppercase text-center ct-fw-700">-->
                        <!--            <div class="item-inner">-->
                        <!--            <span class="h2">Stop</span><br />-->
                        <!--            <span class="h1">Yelling </span><span class="h2">start</span><br />-->
                        <!--            <span class="h1">fighting</span>-->

                        <!--            <div class="text-center ct-u-marginTop70">-->
                        <!--            <a href="single-classes.html" class="btn ct-btn&#45;&#45;o btn-default"><span>join Higgs Training</span></a>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            <div class="item ct-u-colorWhite text-uppercase text-center ct-fw-700">-->
                        <!--            <div class="item-inner">-->
                        <!--            <span class="h2">Stop</span><br />-->
                        <!--            <span class="h1">Yelling </span><span class="h2">start</span><br />-->
                        <!--            <span class="h1">fighting</span>-->

                        <!--            <div class="text-center ct-u-marginTop70">-->
                        <!--            <a href="single-classes.html" class="btn ct-btn&#45;&#45;o btn-default"><span>join Higgs Training</span></a>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            </section>-->
                        <!--            </div>-->
                        <!--            </div>-->
                        <!--            </div>-->
                    </div>
                </div>
            </div>


            <section class="ct-js-news-container" data-height="325" data-background="#000"
                     style="background-color: rgb(0, 0, 0); min-height: 325px;">
                <div class="container">
                    <div class="ct-news">
                        <div class="ct-js-news-row ct-news-row">
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="ct-news-item ct-news-item--type1" style="height: 342px;">
                                        <div class="ct-news-item-header">
                                            <h4 class="ct-news-item-headerText text-uppercase">
                                                <span>Welcome To Higgs Training</span></h4>
                                        </div>

                                        <div class="hero__card">
                                            <p class="hero__text" style="color:white">Take the FREE Body Type quiz to
                                                find out exactly what diet
                                                and exercises will
                                                get you the
                                                best results! </p>
                                            <div class="hero__cta-container d-flex">
                                                <!-- <a @click="firstroute()" class="btn btn-primary" style="color:white">
                                                  <div class="hero__cta male">
                                                    <span class="hero__cta-label">MALE</span>
                                                    <span class="hero__cta-label">➔</span>
                                                  </div>
                                                </a> -->
                                                <!-- href="/b1" -->
                                                <!-- href="/b1" -->
                                                <!-- <a @click="firstroute()" class="btn btn-primary" style="color:white">
                                                  <div class="hero__ct  a female">
                                                    <span class="hero__cta-label">FEMALE</span>
                                                    <span class="hero__cta-label">➔</span>
                                                  </div>
                                                </a> -->
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6">
                                    <article class="ct-news-item ct-news-item--type2" style="height: 342px;">
                                        <div class="ct-news-item-header">
                                            <h4 class="ct-news-item-headerText text-uppercase"><span>Recent News</span>
                                            </h4>
                                            <p>
                                                <a href="blog-list.html">See All News</a>
                                            </p>
                                        </div>

                                        <div class="ct-news-item-body">
                                            <section
                                                class="ct-js-slick ct-slick ct-u-marginBottom30 ct-slick-arrow--type2 slick-initialized slick-slider"
                                                data-autoplay="false" data-arrows="true" data-dots="false"
                                                data-items="1" data-smitems="2"
                                                data-mditems="1" data-lgitems="2" data-snap-ignore="true">
                                                <div class="slick-list draggable" tabindex="0">
                                                    <div class="slick-track"
                                                         style="opacity: 1; width: 1645px; transform: translate3d(-470px, 0px, 0px);">
                                                        <div class="item slick-slide slick-cloned" style="width: 235px;"
                                                             data-slick-index="-2">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">
                                                                    <div class="widget-inner">
                                                                        <div class="media ct-media">
                                                                            <div class="media-left">
                                                                                <time datetime="2015-07-12"><span><span>12</span><span>Jul</span></span>
                                                                                </time>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item slick-slide slick-cloned" style="width: 235px;"
                                                             data-slick-index="-1">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item slick-slide slick-active" style="width: 235px;"
                                                             data-slick-index="0">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">
                                                                    <div class="widget-inner">
                                                                        <div class="media ct-media">
                                                                            <div class="media-left">
                                                                                <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span>
                                                                                </time>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item slick-slide slick-active" style="width: 235px;"
                                                             data-slick-index="1">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">
                                                                    <div class="widget-inner">
                                                                        <div class="media ct-media">
                                                                            <div class="media-left">
                                                                                <time datetime="2015-07-12"><span><span>12</span><span>Jul</span></span>
                                                                                </time>
                                                                            </div>
                                                                            <div class="media-body ct-media-body">
                                                                                <h6 class="media-heading ct-media-heading text-uppercase">
                                                                                    Sparring Session</h6>

                                                                                <p class="ct-media-body-text">
                                                                                    Pellentesque habitant morbi
                                                                                    tristique senectus et netus et
                                                                                    malesuada.
                                                                                </p>

                                                                                <a href="blog-single.html"
                                                                                   class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item slick-slide" style="width: 235px;"
                                                             data-slick-index="2">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">
                                                                    <div class="widget-inner">
                                                                        <div class="media ct-media">
                                                                            <div class="media-left">
                                                                                <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span>
                                                                                </time>
                                                                            </div>
                                                                            <div class="media-body ct-media-body">
                                                                                <h6 class="media-heading ct-media-heading text-uppercase">
                                                                                    MMA Workshop</h6>

                                                                                <p class="ct-media-body-text">
                                                                                    Pellentesque habitant morbi
                                                                                    tristique senectus et netus et
                                                                                    malesuada.
                                                                                </p>

                                                                                <a href="blog-single.html"
                                                                                   class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item slick-slide slick-cloned" style="width: 235px;"
                                                             data-slick-index="3">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">
                                                                    <div class="widget-inner">
                                                                        <div class="media ct-media">
                                                                            <div class="media-left">
                                                                                <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span>
                                                                                </time>
                                                                            </div>
                                                                            <div class="media-body ct-media-body">
                                                                                <h6 class="media-heading ct-media-heading text-uppercase">
                                                                                    MMA Workshop</h6>

                                                                                <p class="ct-media-body-text">
                                                                                    Pellentesque habitant morbi
                                                                                    tristique senectus et netus et
                                                                                    malesuada.
                                                                                </p>

                                                                                <a href="blog-single.html"
                                                                                   class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item slick-slide slick-cloned" style="width: 235px;"
                                                             data-slick-index="4">
                                                            <div class="item-inner">
                                                                <div class="widget ct-widget-recentNews">
                                                                    <div class="widget-inner">
                                                                        <div class="media ct-media">
                                                                            <div class="media-left">
                                                                                <time datetime="2015-07-12"><span><span>12</span><span>Jul</span></span>
                                                                                </time>
                                                                            </div>
                                                                            <div class="media-body ct-media-body">
                                                                                <h6 class="media-heading ct-media-heading text-uppercase">
                                                                                    Sparring Session</h6>

                                                                                <p class="ct-media-body-text">
                                                                                    Pellentesque habitant morbi
                                                                                    tristique senectus et netus et
                                                                                    malesuada.
                                                                                </p>

                                                                                <a href="blog-single.html"
                                                                                   class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="slick-prev" style="display: block;"><i
                                                    class="fa fa-angle-left"></i></button>
                                                <button type="button" class="slick-next"
                                                        style="display: block;"><i class="fa fa-angle-right"></i>
                                                </button>
                                            </section>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="ct-callToAction ct-callToAction--type1">
                <div class="ct-callToAction-inner">
                    <div class="container">
                        <h3 class="ct-callToAction-header text-uppercase text-center">
                            <span>Welcome to Higgs Training</span></h3>

                        <!--                        <div class="text-center">-->
                        <!--                            <a href="http://optimus-prime.createit.pl/Higgs Training-html/buy"-->
                        <!--                               class="btn ct-btn&#45;&#45;o btn-default"><span>PURCHASE-->
                        <!--                  NOW</span></a>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>







            <section id="subscription" class="section ct-u-paddingTop50 section_6 subscription"
                     data-background="./../../public/assets/images/content/BG01.png"
                     style="background-image: url(&quot;assets/images/content/BG01.png&quot;); display: block; position: relative; float: none;">
                <div class="container">


                    <div class="ct-headerBox ct-headerBox--type2">

                        <div class="ct-headerBox-body">
                            <h3><span>CHOOSE YOUR Plan</span><small><span></span>FLEXIBLE AS POSSIBLE</small></h3>
                        </div>
                    </div>

                </div>


                <div>
                    <div class="row" style="padding-left: 100px !important; padding-right: 100px !important;">
                        <div v-for="product in Program_Products" class="col-lg-3  col-md-4  col-sm-8 px-0 mx-0">
                            <article data-v-0e69b27e="" class="ct-pricingTable ct-pricingTable-primary">
                                <div data-v-0e69b27e="" class="ct-pricingTable-image">
                                    <img :src="`/images/${product.media.image}`" alt="icon" />
                                </div>
                                <h3 class="ct-pricingTables-header">
                                    <span data-v-0e69b27e="">{{ product.name }}</span>
                                    <small class="mt-4">
                                        <span data-v-0e69b27e="">{{ product.title }}</span>
                                    </small>
                                </h3>
                                <div data-v-0e69b27e="" class="ct-pricingTable-price"><span
                                    data-v-0e69b27e="">${{ product.price }}<span
                                    data-v-0e69b27e="">/ Program</span></span></div>
                                <p data-v-0e69b27e="" class="ct-pricingTable-text"> {{ product.description }} </p>
                                <ul data-v-0e69b27e="" class="ct-pricingTable-list">
                                    <li data-v-0e69b27e=""> BEGINNER</li>
                                    <li data-v-0e69b27e=""> Unlimited training</li>
                                    <li data-v-0e69b27e=""> Muptiple Time PDF</li>

                                </ul>
                                <div v-if="user_id" @click="downloadFile(product)"
                                     class="text-center ct-u-marginTop60"><span
                                    class="btn ct-btn--c btn-default"><span
                                    data-v-0e69b27e="">
<!--                                  <a :href="'http://127.0.0.1:8000/stripp/' + product.id"-->
<!--                                  -->
<!--                                  >Buy</a>-->
                                       Buy
                                    </span></span></div>
                                <div v-else  class="text-center ct-u-marginTop60"><span
                                    @click="downloadFile(product)">
<!--                                    @click="loginRedirect"-->
                                                                                       class="btn ct-btn--c btn-default"><span
                                    data-v-0e69b27e="">Buy </span></span></div>
                            </article>

                        </div>



                        <!--            <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">-->
                        <!--              <article class="ct-pricingTable ct-pricingTable-primary">-->
                        <!--                <div class="ct-pricingTable-image">-->
                        <!--                  <img src="./../../public/assets/images/content/pexels-pikx-by-panther-1547248.jpg" alt="icon">-->
                        <!--                </div>-->
                        <!--                <div class="ct-pricingTable-price m-0 text-center">-->
                        <!--                  <h5>{{ Subs_Products.name }}</h5>-->
                        <!--                </div>-->

                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ Subs_Products.title }}-->
                        <!--                </p>-->
                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ Subs_Products.price }}-->
                        <!--                </p>-->
                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ Subs_Products.description }}-->
                        <!--                </p>-->

                        <!--                <div class="text-center ct-u-marginTop60" v-if="token != null">-->
                        <!--                  <a class="btn ct-btn&#45;&#45;c btn-default" @click="download(Subs_Products.id)"><span>Download</span></a>-->
                        <!--                </div>-->
                        <!--              </article>-->
                        <!--            </div>-->

                        <!--            <div class="col-lg-3 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">-->
                        <!--              <article class="ct-pricingTable">-->
                        <!--                <div class="ct-pricingTable-image">-->
                        <!--                  <img src="./../../public/assets/images/content/pexels-nathan-cowley-1153369.jpg" alt="icon">-->
                        <!--                </div>-->

                        <!--                <h3 class="ct-pricingTables-header"><span>{{personal_program.name}}</span>-->
                        <!--                  <small><span>{{ personal_program.title }}</span></small>-->
                        <!--                </h3>-->

                        <!--                &lt;!&ndash; <div class="ct-pricingTable-price">-->
                        <!--                  <span>{{personal_program.price}}</span>-->
                        <!--                </div> &ndash;&gt;-->
                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ personal_program.price }}-->
                        <!--                </p>-->
                        <!--                <p class="ct-pricingTable-text">-->
                        <!--                  {{personal_program.description}}-->
                        <!--                </p>-->

                        <!--                &lt;!&ndash; <ul class="ct-pricingTable-list">-->
                        <!--                  <li>-->
                        <!--                    Fifo - Fly in / fly out-->
                        <!--                  </li>-->
                        <!--                  <li>-->
                        <!--                    train 24hrs/day-->
                        <!--                  </li>-->
                        <!--                  <li>-->
                        <!--                    1 isotonic drink free-->
                        <!--                  </li>-->
                        <!--                </ul> &ndash;&gt;-->

                        <!--                <div class="text-center ct-u-marginTop60" v-if="token != null">-->
                        <!--                  <a class="btn ct-btn&#45;&#45;c btn-default" @click="select_gender(personal_program.id)"><span>Choose</span></a>-->
                        <!--                </div>-->
                        <!--              </article>-->
                        <!--            </div>-->
                    </div>
                </div>

            </section>

            <section id="plan" class="section ct-u-paddingTop50 section_6 plan"
                     data-background="./../../public/assets/images/content/BG01.png"
                     style="background-image: url(&quot;assets/images/content/BG01.png&quot;); display: block; position: relative; float: none;">
                <div class="container">


                    <div class="ct-headerBox ct-headerBox--type2">

                        <div class="ct-headerBox-body">
                            <h3><span>CHOOSE YOUR Monthly Subscription</span><small><span></span>FLEXIBLE AS
                                POSSIBLE</small></h3>
                        </div>
                    </div>

                </div>


                <div>
                    <div class="row" style="padding-left: 100px !important; padding-right: 100px !important;">
                        <div v-for="prod in Subs_Products" class="col-lg-3  col-md-4  col-sm-8 px-0 mx-0">
                            <article data-v-0e69b27e="" class="ct-pricingTable ct-pricingTable-primary">
                                <div data-v-0e69b27e="" class="ct-pricingTable-image">
                                    <img :src="`/images/${prod.media.image}`" alt="icon" />
                                </div>
                                <h3 class="ct-pricingTables-header">
                                    <span data-v-0e69b27e="">
                                        {{ prod.name }}
                                    </span>
                                    <small class="mt-4">
                                        <span data-v-0e69b27e="">{{ prod.title }}</span>
                                    </small>
                                </h3>
                                <div data-v-0e69b27e="" class="ct-pricingTable-price"><span
                                    data-v-0e69b27e="">${{ prod.price }}<span
                                    data-v-0e69b27e="">/ Month</span></span></div>
                                <p data-v-0e69b27e="" class="ct-pricingTable-text"> {{ prod.description }} </p>
                                <ul data-v-0e69b27e="" class="ct-pricingTable-list">
                                    <li data-v-0e69b27e=""> BEGINNER</li>
                                    <li data-v-0e69b27e=""> Unlimited training</li>
                                    <li data-v-0e69b27e=""> Monthly PDF</li>

                                </ul>
                                <div v-if="user_id"
                                     @click="downloadFile(prod)"
                                     class="text-center ct-u-marginTop60">
<!--                                     @click="downloadFile(product)"-->


                                    <span class="btn ct-btn--c btn-default"><span
                                        data-v-0e69b27e="">Buy</span></span>

                                </div>
                                <div v-else  @click="downloadFile(prod)" class="text-center ct-u-marginTop60">
                                    <span class="btn ct-btn--c btn-default"><span @click="loginRedirect"
                                                                                  data-v-0e69b27e="">Buy1</span></span>

                                </div>
                            </article>

                        </div>


                        <!--            <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">-->
                        <!--              <article class="ct-pricingTable ct-pricingTable-primary">-->
                        <!--                <div class="ct-pricingTable-image">-->
                        <!--                  <img src="./../../public/assets/images/content/pexels-pikx-by-panther-1547248.jpg" alt="icon">-->
                        <!--                </div>-->
                        <!--                <div class="ct-pricingTable-price m-0 text-center">-->
                        <!--                  <h5>{{ Subs_Products.name }}</h5>-->
                        <!--                </div>-->

                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ Subs_Products.title }}-->
                        <!--                </p>-->
                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ Subs_Products.price }}-->
                        <!--                </p>-->
                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ Subs_Products.description }}-->
                        <!--                </p>-->

                        <!--                <div class="text-center ct-u-marginTop60" v-if="token != null">-->
                        <!--                  <a class="btn ct-btn&#45;&#45;c btn-default" @click="download(Subs_Products.id)"><span>Download</span></a>-->
                        <!--                </div>-->
                        <!--              </article>-->
                        <!--            </div>-->

                        <!--            <div class="col-lg-3 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">-->
                        <!--              <article class="ct-pricingTable">-->
                        <!--                <div class="ct-pricingTable-image">-->
                        <!--                  <img src="./../../public/assets/images/content/pexels-nathan-cowley-1153369.jpg" alt="icon">-->
                        <!--                </div>-->

                        <!--                <h3 class="ct-pricingTables-header"><span>{{personal_program.name}}</span>-->
                        <!--                  <small><span>{{ personal_program.title }}</span></small>-->
                        <!--                </h3>-->

                        <!--                &lt;!&ndash; <div class="ct-pricingTable-price">-->
                        <!--                  <span>{{personal_program.price}}</span>-->
                        <!--                </div> &ndash;&gt;-->
                        <!--                <p class="ct-pricingTable-text m-0 text-center">-->
                        <!--                  {{ personal_program.price }}-->
                        <!--                </p>-->
                        <!--                <p class="ct-pricingTable-text">-->
                        <!--                  {{personal_program.description}}-->
                        <!--                </p>-->

                        <!--                &lt;!&ndash; <ul class="ct-pricingTable-list">-->
                        <!--                  <li>-->
                        <!--                    Fifo - Fly in / fly out-->
                        <!--                  </li>-->
                        <!--                  <li>-->
                        <!--                    train 24hrs/day-->
                        <!--                  </li>-->
                        <!--                  <li>-->
                        <!--                    1 isotonic drink free-->
                        <!--                  </li>-->
                        <!--                </ul> &ndash;&gt;-->

                        <!--                <div class="text-center ct-u-marginTop60" v-if="token != null">-->
                        <!--                  <a class="btn ct-btn&#45;&#45;c btn-default" @click="select_gender(personal_program.id)"><span>Choose</span></a>-->
                        <!--                </div>-->
                        <!--              </article>-->
                        <!--            </div>-->
                    </div>
                </div>

            </section>


            <section id="trainers" class="section ct-u-paddingTop100 section_3"
                     style="display: block; position: relative; float: none;">
                <div class="container">
                    <div class="ct-headerBox ct-headerBox--type2">

                        <div class="ct-headerBox-body" style="margin-top: 40px">
                            <h3><span >IF YOU WANT TO BE THE BEST</span>
                                <span>YOU GOTTA LEARN FROM THE BEST Trainer</span>
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="ct-js-sliderTab">
                    <div class="ct-sliderTab-slider">
                        <div class="container">
                            <section
                                class="ct-js-slick ct-slickTab ct-js-slickTab ct-slick ct-slick-arrow--type3 slick-initialized slick-slider"
                                data-initialslide="1" data-infinite="false" data-centermode="false"
                                data-centerpadding="0"
                                data-swipetoslide="true" data-autoplay="false" data-arrows="true" data-dots="false"
                                data-items="1"
                                data-smitems="3" data-mditems="4" data-lgitems="5" data-height="355"
                                data-snap-ignore="true"
                                style="min-height: 355px; height: 355px;">

                                <div class="slick-list draggable" tabindex="0">
                                    <div class="slick-track"
                                         style="opacity: 1; width: 1404px; transform: translate3d(-234px, 0px, 0px);">
                                        <div class="item slick-slide" data-for="buakaw"
                                             style="height: 355px; width: 234px;"
                                             data-slick-index="0">
                                            <div class="item-inner">
                                                <figure>
                                                    <img src="/images/gym_image.jpeg"
                                                         alt="">
                                                </figure>

                                                <div class="ct-item-footer">
                                                    <div>
                                                        <p><span data-content="BUAKAW P.P.">BUAKAW P.P.</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div v-for="train in getTrainersData" class="item active slick-slide slick-active" data-for="antohny"
                                             style="height: 355px; width: 234px;" data-slick-index="1">
                                            <div class="item-inner">
                                                <figure>
                                                    <img
                                                        src="./../../public/assets/images/my.jpg"
                                                        alt="">
                                                </figure>

                                                <div class="ct-item-footer">
                                                    <div>
                                                        <p><span data-content="ANTOHNY B.">{{train.username}}</span></p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <button type="button" class="slick-prev" style="display: block;"><i
                                    class="fa fa-angle-left"></i></button>
                                <button type="button" class="slick-next slick-disabled"
                                        style="display: block;"><i class="fa fa-angle-right"></i></button>
                            </section>
                        </div>
                    </div>
                </div>
            </section>


            <section id="galleries" class="section  ct-u-paddingBottom150 section_2"
                     data-background="./../../public/assets/images/content/galleryBG.jpg"
                     style="background-image: url(&quot;assets/images/content/galleryBG.jpg&quot;); display: block; position: relative; float: none;">

                <div class="container">

                    <div class="ct-headerBox ct-headerBox--type2">


                        <div class="ct-headerBox-body">
                            <h3>
                                <small><span>COME TO THE Higgs Training TODAY</span></small></h3>
                        </div>
                    </div>
                    <!-- one  -->
                    <div class="ct-testimonial ct-js-testimonial">
                        <div class="ct-js-testimonial-row ct-testimonial-row pb-5">
                            <article class="ct-testimonial-item ct-testimonial-item--large skrollable skrollable-before"
                                     data-bottom-top="left: -140%;" data-bottom="left: 0;">
                                <a href="trainer-single.html">
                                    <div class="ct-testimonial-item-media">
                                        <figure>
                                            <img class="grayscale grayscale-fade"
                                                 src="./../../public/assets/images/content/testimonial-img-one.jpeg"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="ct-testimonial-item-content">
                                        <h4 class="text-uppercase text-center ct-testimonial-item-header">
                                            <span>Mixed Martial Arts</span>
                                            <small><span>Anthony B. Laura James</span></small>
                                        </h4>

                                        <p class="text-center">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas.
                                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet,
                                            ante. Donec eu libero sit
                                            amet quam egestas.
                                        </p>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <!-- two -->
                        <div class="ct-js-testimonial-row ct-testimonial-row pb-5">
                            <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                                     data-bottom-top="left: -140%;" data-bottom="left: 0;">
                                <a href="trainer-single.html">

                                    <div class="ct-testimonial-item-media">
                                        <figure>
                                            <img class="grayscale grayscale-fade"
                                                 src="./../../public/assets/images/content/testimonial-img-three.jpeg"
                                                 alt="">
                                        </figure>
                                    </div>

                                    <div class="ct-testimonial-item-content">
                                        <h4 class="text-uppercase text-center ct-testimonial-item-header">
                                            <span>BRAZILIAN JUI-JITSU</span>
                                            <small><span>FABRICIO DA SILVA</span></small>
                                        </h4>

                                        <p class="ct-testimonial-item-text text-center">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas.
                                            Vestibulum tortor.
                                        </p>
                                    </div>
                                </a>
                            </article>

                            <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                                     data-bottom-top="right: -140%;" data-bottom="right: 0;">
                                <a href="trainer-single.html">

                                    <div class="ct-testimonial-item-media">
                                        <figure>
                                            <img class="grayscale grayscale-fade"
                                                 src="./../../public/assets/images/content/testimonial-img-two.jpeg"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="ct-testimonial-item-content">
                                        <h4 class="text-uppercase text-center ct-testimonial-item-header">
                                            <span>MUAH THAI BOXING</span>
                                            <small><span>Telian Tek</span></small>
                                        </h4>

                                        <p class="ct-testimonial-item-text text-center">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas.
                                            Vestibulum tortor.
                                        </p>
                                    </div>
                                </a>
                            </article>
                        </div>
                        <!-- three -->
                        <div class="ct-js-testimonial-row ct-testimonial-row">
                            <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                                     data-bottom-top="left: -140%;" data-bottom="left: 0;">
                                <a href="trainer-single.html">

                                    <div class="ct-testimonial-item-media pull-right">
                                        <figure>
                                            <img class="grayscale grayscale-fade"
                                                 src="./../../public/assets/images/content/testimonial-img-three.jpeg"
                                                 alt="">
                                        </figure>
                                    </div>

                                    <div class="ct-testimonial-item-content">
                                        <h4 class="text-uppercase text-center ct-testimonial-item-header">
                                            <span style="color:red;">PRAYING MANTIS KUNG-FU</span>
                                            <small><span>JET LEE, BRUCE LEE</span></small>
                                        </h4>

                                        <p class="ct-testimonial-item-text text-center">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas.
                                            Vestibulum tortor.
                                        </p>
                                    </div>
                                </a>
                            </article>

                            <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                                     data-bottom-top="right: -140%;" data-bottom="right: 0;">
                                <a href="trainer-single.html">

                                    <div class="ct-testimonial-item-media pull-right"
                                         style="background-color: lightblue;">
                                        <figure>
                                            <img class="grayscale grayscale-fade"
                                                 src="./../../public/assets/images/content/testimonial-img-one.jpeg"
                                                 alt="">
                                        </figure>
                                    </div>
                                    <div class="ct-testimonial-item-content">
                                        <h4 class="text-uppercase text-center ct-testimonial-item-header">
                                            <span>KICK BOXING MEN &amp; WOMAN</span>
                                            <small><span>LAURA JAMES</span></small>
                                        </h4>

                                        <p class="ct-testimonial-item-text text-center">
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis egestas.
                                            Vestibulum tortor.
                                        </p>
                                    </div>
                                </a>
                            </article>
                        </div>

                    </div>
                </div>
            </section>



            <section class="ct-u-paddingTop150">


                <div class="ct-form-container ct-u-marginBottom100">
                    <div class="container">

                        <div class="successMessage alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                            <strong>Success!</strong> Congratulation, mission success
                        </div>

                        <div class="errorMessage alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                            <strong>Danger!</strong> You did something wrong
                        </div>


                        <form data-email-subject="Form Subject" class="validateIt" role="form"
                              action="./../../public/assets/form/send.php" method="POST">
                            <div class="row ct-u-marginBottom30 ct-u-marginTop-100">
                                <div class="col-md-12">
                                    <div class="ct-form-header ct-u-marginBottom30 ct-u-marginTop100 text-center">
                                        <h1 class="text-white">Contact Us</h1>
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ct-u-marginBottom30 mt-5" >
                                        <input type="text" class="form-control " id="firstName" required=""
                                               name="field[]"
                                               placeholder="First Name" style="height: 40px; color: white;
                                                text-transform: none ; ">
                                        <label for="firstName" >First Name</label>
                                    </div>

                                    <div class="form-group ct-u-marginBottom30 mt-5" >
                                        <input type="text" class="form-control" id="adress" required="" name="field[]"
                                               placeholder="Adress"
                                               style="height: 40px; color: white; text-transform: none;">
                                        <label for="adress" >Adress</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ct-u-marginBottom30 mt-5"  >
                                        <input type="text" class="form-control" id="lastName" required="" name="field[]"
                                               placeholder="Last Name" style="height: 40px; color: white; text-transform: none">
                                        <label for="lastName" >Last Name</label>
                                    </div>

                                    <div class="form-group ct-u-marginBottom30 mt-5" >
                                        <input type="email" class="form-control" id="email" required="" name="field[]"
                                               placeholder="Email"
                                               style="height: 40px; color: white; text-transform: none;">
                                        <label for="email" >E-mail</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row col-12 p-0 ml-1 mt-5" >
                                <div class="col-12 ct-u-marginBottom30 p-0" >
                                    <div class="form-group" >
                    <textarea class="form-control" id="textarea" rows="7" required="" name="field[]"
                              placeholder="Message" style="color: white; text-transform: none;"></textarea>
                                        <label for="textarea" >Message</label>
                                    </div>
                                </div>

                                <div class="col-12 p-0">
                                    <div class="form-group" >
                                        <div class="row col-12 p-0" >
                                            <div class="col-sm-offset-4 col-sm-4" >
                                                <button type="submit" class="btn btn-block ct-btn--o btn-default" ><span>Submit</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section class="ct-callToAction ct-callToAction--type1">
                <div class="ct-callToAction-inner">
                    <div class="container text-center">
                        <h2 class="text-white">Welcome to Higgs Training</h2>
                    </div>
                </div>
            </section>

        </main>
        <FooterComponent/>


    </div>

    <a href="#" class="ct-js-btnScrollUp"><span><i class="fa fa-angle-up"></i></span></a>

    <!-- JavaScripts -->


    <!-- JavaScripts -->
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
            personal_program: [],
            getTrainersData: [],
            token: null,
            user_id: null
        }
    },
    components: {
        HeaderComponent,
        FooterComponent,
    },
    methods: {

        downloadFile(product) {
            console.log(product.media)

            const fileUrl = 'files/'+product.media.file;

            // Create a temporary link element
            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileUrl; // Optional: Specify a default file name

            // Append the link to the body (required for Firefox)
            document.body.appendChild(link);

            // Trigger the download
            link.click();

            // Remove the link from the document
            document.body.removeChild(link);
        },
        loginRedirect() {
            alert('Please login first to buy the program');
            this.$router.push("/login")
        },
        async buyProgram(amount, id) {

            // const response = await axios.get('/stripe/payment/'+id);
            localStorage.setItem("price", amount);
            localStorage.setItem("product_id", id);
            this.$router.push('stripe');
        },
        async getProductSubs() {
            const response = await axios.get('/product/subscription/user');
            this.Subs_Products = response.data;

            console.log(this.Subs_Products,'sad');
        },

        async getTrainers() {
            const response = await axios.get('/get-trainers');

            this.getTrainersData = response.data;

            console.log( this.getTrainersData, 'getTrainersData')

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
            const response = await axios.get('/product/program/user');
            this.Program_Products = response.data;
            console.log(this.Program_Products,'Program_Products');
        },
        async getProductpersonnalProgram() {
            const response = await axios.get('/product/personal-program/user');
            this.personal_program = response.data;
        },
        async select_gender(id) {
            this.$store.commit('setproduct_id', id)
            this.$router.push("/select-gender")
        },
        async download(id) {
            if (typeof id == 'undefined') {
                alert('Record Not Found');
            }
            const token = localStorage.getItem('token'); // Replace with your actual authentication token
            const headers = {
                'Authorization': `Bearer ${token}`
            };
            const response = await axios.get('/download/product/all/file/' + id, {
                responseType: 'blob',
                headers: headers
            });
            console.log(response.data);
            if (response.data.status == 400) {
                alert('Record Not Found');
            } else {
                var fileURL = window.URL.createObjectURL(new Blob([response.data]));
                var fileLink = document.createElement('a');
                fileLink.href = fileURL;
                fileLink.setAttribute('download', 'gym.pdf');
                document.body.appendChild(fileLink);

                fileLink.click();
            }

        },

    },
    mounted() {
        this.getProductProgram();
        this.getTrainers();
        this.getProductSubs();
        this.getProductpersonnalProgram();
        this.token = localStorage.getItem('token');
        this.user_id = localStorage.getItem('user_id')
    },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.form-control {
    border: 1px solid #000000 !important;
}

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
}
</style>
