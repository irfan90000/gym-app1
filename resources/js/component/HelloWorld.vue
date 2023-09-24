<template>
  <HeaderComponent />
  <!--  <body class="cssAnimate ct-onepage">-->

  <div class="ct-preloader animated fadeOut" style="display: none; z-index: -9999;">
    <div class="ct-preloader-content animated fadeOut"></div>
  </div>


  <!--  <div class="ct-menuMobile">-->
  <!--    <ul class="ct-menuMobile-navbar">-->
  <!--      <li class="onepage"><a href="#home">Home</a></li>-->
  <!--      <li class="onepage"><a href="#testimonials">Testimonials</a></li>-->
  <!--      <li class="onepage"><a href="#trainers">Trainers</a></li>-->
  <!--      <li class="onepage"><a href="#calendars">Calendar</a></li>-->
  <!--      <li class="onepage"><a href="#callToAction">Call To Action</a></li>-->
  <!--      <li class="onepage"><a href="#services">Services</a></li>-->
  <!--      <li class="onepage"><a href="#gallery">Gallery</a></li>-->
  <!--      <li class="onepage"><a href="#map">Map</a></li>-->
  <!--    </ul>-->
  <!--  </div>-->


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
                <h4 class="text-center ct-fw-700 text-uppercase ct-ff-2"><span>Join to The Team</span></h4>
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
                        <input type="text" class="form-control" id="modalFirstName" placeholder="First Name" required=""
                          name="field[]">
                        <label class="sr-only" for="modalFirstName">First Name</label>
                      </div>

                      <div class="form-group ct-u-marginBottom30">
                        <input type="text" class="form-control" id="modalLastName" placeholder="Last Name" required=""
                          name="field[]">
                        <label class="sr-only" for="modalLastName">Last Name</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group ct-u-marginBottom30">
                        <input type="email" class="form-control" id="modalEmail" placeholder="E-mail" required=""
                          name="field[]">
                        <label class="sr-only" for="modalEmail">E-mail</label>
                      </div>

                      <div class="form-group ct-u-marginBottom30">

                        <select class="form-control" id="modalCategories" required="" name="field[]">
                          <option value="">KICK BOXING</option>
                          <option value="BOXING">BOXING</option>
                          <option value="DOJO">DOJO</option>
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
                        class="btn btn-block btn-sm ct-btn--c btn-default"><span>Submit</span></button>
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

      <div id="home" class="section section_1" style="display: block; position: relative; float: none;">

        <div class="ct-mediaSection" data-height="865" data-type="video"
          data-background-mobile="./../../public/assets/images/content/stopYellingBG01.jpg"
          style="background-image: url(&quot;&quot;); min-height: 865px;">
          <div class="ct-mediaSection-video">
            <video muted="" loop="" autoplay="autoplay" preload="auto">
              <source src="http://127.0.0.1:8000/video.mp4" type="video/mp4">
              <!-- <source src="http://dojo.html.themeforest.createit.pl/assets/videos/video.webm" type="video/webm"> -->
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
            <!--            <a href="single-classes.html" class="btn ct-btn&#45;&#45;o btn-default"><span>join dojo</span></a>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--            <div class="item ct-u-colorWhite text-uppercase text-center ct-fw-700">-->
            <!--            <div class="item-inner">-->
            <!--            <span class="h2">Stop</span><br />-->
            <!--            <span class="h1">Yelling </span><span class="h2">start</span><br />-->
            <!--            <span class="h1">fighting</span>-->

            <!--            <div class="text-center ct-u-marginTop70">-->
            <!--            <a href="single-classes.html" class="btn ct-btn&#45;&#45;o btn-default"><span>join dojo</span></a>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--            </div>-->
            <!--            <div class="item ct-u-colorWhite text-uppercase text-center ct-fw-700">-->
            <!--            <div class="item-inner">-->
            <!--            <span class="h2">Stop</span><br />-->
            <!--            <span class="h1">Yelling </span><span class="h2">start</span><br />-->
            <!--            <span class="h1">fighting</span>-->

            <!--            <div class="text-center ct-u-marginTop70">-->
            <!--            <a href="single-classes.html" class="btn ct-btn&#45;&#45;o btn-default"><span>join dojo</span></a>-->
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
                      <h4 class="ct-news-item-headerText text-uppercase"><span>Welcome To Dojo</span></h4>
                    </div>

                    <div class="hero__card">
                      <p class="hero__text" style="color:white">Take the FREE Body Type quiz to find out exactly what diet
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
                      <h4 class="ct-news-item-headerText text-uppercase"><span>Recent News</span></h4>
                      <p>
                        <a href="blog-list.html">See All News</a>
                      </p>
                    </div>

                    <div class="ct-news-item-body">
                      <section
                        class="ct-js-slick ct-slick ct-u-marginBottom30 ct-slick-arrow--type2 slick-initialized slick-slider"
                        data-autoplay="false" data-arrows="true" data-dots="false" data-items="1" data-smitems="2"
                        data-mditems="1" data-lgitems="2" data-snap-ignore="true">
                        <div class="slick-list draggable" tabindex="0">
                          <div class="slick-track"
                            style="opacity: 1; width: 1645px; transform: translate3d(-470px, 0px, 0px);">
                            <div class="item slick-slide slick-cloned" style="width: 235px;" data-slick-index="-2">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-07-12"><span><span>12</span><span>Jul</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">Sparring Session</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item slick-slide slick-cloned" style="width: 235px;" data-slick-index="-1">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">MMA Workshop</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item slick-slide slick-active" style="width: 235px;" data-slick-index="0">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">MMA Workshop</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item slick-slide slick-active" style="width: 235px;" data-slick-index="1">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-07-12"><span><span>12</span><span>Jul</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">Sparring Session</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item slick-slide" style="width: 235px;" data-slick-index="2">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">MMA Workshop</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item slick-slide slick-cloned" style="width: 235px;" data-slick-index="3">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-06-23"><span><span>23</span><span>Jun</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">MMA Workshop</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="item slick-slide slick-cloned" style="width: 235px;" data-slick-index="4">
                              <div class="item-inner">
                                <div class="widget ct-widget-recentNews">
                                  <div class="widget-inner">
                                    <div class="media ct-media">
                                      <div class="media-left">
                                        <time datetime="2015-07-12"><span><span>12</span><span>Jul</span></span></time>
                                      </div>
                                      <div class="media-body ct-media-body">
                                        <h6 class="media-heading ct-media-heading text-uppercase">Sparring Session</h6>

                                        <p class="ct-media-body-text">
                                          Pellentesque habitant morbi tristique senectus et netus et malesuada.
                                        </p>

                                        <a href="blog-single.html" class="btn ct-btn--link btn-default"><span>Read
                                            more</span></a>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><button type="button" class="slick-prev" style="display: block;"><i
                            class="fa fa-angle-left"></i></button><button type="button" class="slick-next"
                          style="display: block;"><i class="fa fa-angle-right"></i></button>
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
            <h3 class="ct-callToAction-header text-uppercase text-center"><span>Want to buy? </span> Click The Button</h3>

            <div class="text-center">
              <a href="http://optimus-prime.createit.pl/dojo-html/buy" class="btn ct-btn--o btn-default"><span>PURCHASE
                  NOW</span></a>
            </div>
          </div>
        </div>
      </div>

      <section id="testimonials" class="section ct-u-paddingTop100 ct-u-paddingBottom150 section_2"
        data-background="./../../public/assets/images/content/galleryBG.jpg"
        style="background-image: url(&quot;assets/images/content/galleryBG.jpg&quot;); display: block; position: relative; float: none;">

        <div class="container">

          <div class="ct-headerBox ct-headerBox--type2">
            <div class="ct-headerBox-media">
              <img src="./../../public/assets/images/content/iconBox01.png" alt="icon">
            </div>

            <div class="ct-headerBox-body">
              <h3><span>NO MORE EXCUSES, JOIN A CLASS TODAY</span> <small><span>COME TO THE DOJO TODAY</span></small></h3>
            </div>
          </div>


          <div class="ct-testimonial ct-js-testimonial">
            <div class="ct-js-testimonial-row ct-testimonial-row">
              <article class="ct-testimonial-item ct-testimonial-item--large skrollable skrollable-before"
                data-bottom-top="left: -140%;" data-bottom="left: 0;" style="height: 337px; left: -140%;">
                <a href="trainer-single.html">
                  <div class="ct-testimonial-item-media">
                    <figure>
                      <img class="grayscale grayscale-fade" src="./../../public/assets/images/content/galleryItem01.jpg"
                        alt="">
                    </figure>
                  </div>
                  <div class="ct-testimonial-item-content">
                    <h4 class="text-uppercase text-center ct-testimonial-item-header">
                      <span>Mixed Martial Arts</span>
                      <small><span>Anthony B. Laura James</span></small>
                    </h4>

                    <p class="ct-testimonial-item-text text-center">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas.
                    </p>
                  </div>
                </a>
              </article>
            </div>

            <div class="ct-js-testimonial-row ct-testimonial-row">
              <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                data-bottom-top="left: -140%;" data-bottom="left: 0;" style="height: 355px; left: -140%;">
                <a href="trainer-single.html">
                  <div class="ct-testimonial-item-media">
                    <figure>
                      <img class="grayscale grayscale-fade" src="./../../public/assets/images/content/galleryItem02.jpg"
                        alt="">
                    </figure>
                  </div>
                  <div class="ct-testimonial-item-content">
                    <h4 class="text-uppercase text-center ct-testimonial-item-header">
                      <span>MUAH THAI BOXING</span>
                      <small><span>Telian Tek</span></small>
                    </h4>

                    <p class="ct-testimonial-item-text text-center">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor.
                    </p>
                  </div>
                </a>
              </article>

              <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                data-bottom-top="right: -140%;" data-bottom="right: 0;" style="height: 355px; right: -140%;">
                <a href="trainer-single.html">
                  <div class="ct-testimonial-item-media">
                    <figure>
                      <img class="grayscale grayscale-fade" src="./../../public/assets/images/content/galleryItem03.jpg"
                        alt="">
                    </figure>
                  </div>
                  <div class="ct-testimonial-item-content">
                    <h4 class="text-uppercase text-center ct-testimonial-item-header">
                      <span>BRAZILIAN JUI-JITSU</span>
                      <small><span>FABRICIO DA SILVA</span></small>
                    </h4>

                    <p class="ct-testimonial-item-text text-center">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor.
                    </p>
                  </div>
                </a>
              </article>
            </div>

            <div class="ct-js-testimonial-row ct-testimonial-row">
              <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                data-bottom-top="left: -140%;" data-bottom="left: 0;" style="height: 320px; left: -140%;">
                <a href="trainer-single.html">

                  <div class="ct-testimonial-item-media pull-right">
                    <figure>
                      <img class="grayscale grayscale-fade" src="./../../public/assets/images/content/galleryItem04.jpg"
                        alt="">
                    </figure>
                  </div>

                  <div class="ct-testimonial-item-content">
                    <h4 class="text-uppercase text-center ct-testimonial-item-header">
                      <span>PRAYING MANTIS KUNG-FU</span>
                      <small><span>JET LEE, BRUCE LEE</span></small>
                    </h4>

                    <p class="ct-testimonial-item-text text-center">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor.
                    </p>
                  </div>
                </a>
              </article>

              <article class="ct-testimonial-item ct-testimonial-item--small skrollable skrollable-before"
                data-bottom-top="right: -140%;" data-bottom="right: 0;" style="height: 320px; right: -140%;">
                <a href="trainer-single.html">

                  <div class="ct-testimonial-item-media pull-right">
                    <figure>
                      <img class="grayscale grayscale-fade" src="./../../public/assets/images/content/galleryItem05.jpg"
                        alt="">
                    </figure>
                  </div>
                  <div class="ct-testimonial-item-content">
                    <h4 class="text-uppercase text-center ct-testimonial-item-header">
                      <span>KICK BOXING MEN &amp; WOMAN</span>
                      <small><span>LAURA JAMES</span></small>
                    </h4>

                    <p class="ct-testimonial-item-text text-center">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor.
                    </p>
                  </div>
                </a>
              </article>
            </div>

          </div>
        </div>
      </section>



      <section id="trainers" class="section ct-u-paddingTop100 section_3"
        style="display: block; position: relative; float: none;">
        <div class="container">
          <div class="ct-headerBox ct-headerBox--type2">
            <div class="ct-headerBox-media">
              <img src="./../../public/assets/images/content/iconBox01.png" alt="icon">
            </div>

            <div class="ct-headerBox-body">
              <h3><span>IF YOU WANT TO BE THE BEST</span> <small><span>YOU GOTTA LEARN FROM THE BEST</span></small></h3>
            </div>
          </div>
        </div>


        <div class="ct-js-sliderTab">
          <div class="ct-sliderTab-slider">
            <div class="container">
              <section
                class="ct-js-slick ct-slickTab ct-js-slickTab ct-slick ct-slick-arrow--type3 slick-initialized slick-slider"
                data-initialslide="1" data-infinite="false" data-centermode="false" data-centerpadding="0"
                data-swipetoslide="true" data-autoplay="false" data-arrows="true" data-dots="false" data-items="1"
                data-smitems="3" data-mditems="4" data-lgitems="5" data-height="355" data-snap-ignore="true"
                style="min-height: 355px; height: 355px;">
                <div class="slick-list draggable" tabindex="0">
                  <div class="slick-track" style="opacity: 1; width: 1404px; transform: translate3d(-234px, 0px, 0px);">
                    <div class="item slick-slide" data-for="buakaw" style="height: 355px; width: 234px;"
                      data-slick-index="0">
                      <div class="item-inner">
                        <figure>
                          <img src="./../../public/assets/images/content/rosterImg01.png" alt="">
                        </figure>

                        <div class="ct-item-footer">
                          <div>
                            <p><span data-content="BUAKAW P.P.">BUAKAW P.P.</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item active slick-slide slick-active" data-for="antohny"
                      style="height: 355px; width: 234px;" data-slick-index="1">
                      <div class="item-inner">
                        <figure>
                          <img src="./../../public/assets/images/content/pexels-cottonbro-studio-4761668.jpg" alt="">
                        </figure>

                        <div class="ct-item-footer">
                          <div>
                            <p><span data-content="ANTOHNY B.">ANTOHNY B.</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item slick-slide slick-active" data-for="fabricio" style="height: 355px; width: 234px;"
                      data-slick-index="2">
                      <div class="item-inner">
                        <figure>
                          <img src="./../../public/assets/images/content/pexels-ivan-samkov-4164640.jpg" alt="">
                        </figure>

                        <div class="ct-item-footer">
                          <div>
                            <p><span data-content="FABRICIO D.S.">FABRICIO D.S.</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item slick-slide slick-active" data-for="laura" style="height: 355px; width: 234px;"
                      data-slick-index="3">
                      <div class="item-inner">
                        <figure>
                          <img src="./../../public/assets/images/content/pexels-jonathan-borba-13896072.jpg" alt="">
                        </figure>

                        <div class="ct-item-footer">
                          <div>
                            <p><span data-content="LAURA J.">LAURA J.</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item slick-slide slick-active" data-for="floyd" style="height: 355px; width: 234px;"
                      data-slick-index="4">
                      <div class="item-inner">
                        <figure>
                          <img src="./../../public/assets/images/content/pexels-leon-ardho-2468339.jpg" alt="">
                        </figure>

                        <div class="ct-item-footer">
                          <div>
                            <p><span data-content="FLOYD G.">FLOYD G.</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item slick-slide slick-active" data-for="none" style="height: 355px; width: 234px;"
                      data-slick-index="5">
                      <div class="item-inner">
                        <figure>
                          <div class="ct-sliderTab-join" data-toggle="modal" data-target="#modal1">
                            <span class="text-center">
                              <i class="fa fa-plus"></i>
                            </span>

                            <span class="text-left">Join The Team Now!</span>
                          </div>
                        </figure>

                        <div class="text-center ct-joinItem">
                          <a href="#" class="btn ct-btn--o btn-default" data-toggle="modal"
                            data-target="#modal1"><span>join us</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><button type="button" class="slick-prev" style="display: block;"><i
                    class="fa fa-angle-left"></i></button><button type="button" class="slick-next slick-disabled"
                  style="display: block;"><i class="fa fa-angle-right"></i></button>
              </section>
            </div>

          </div>
          <div class="ct-js-sliderTab-content ct-sliderTab-content">
            <div class="container">
              <div class="targetItem buakaw">
                <div class="media ct-media ct-u-paddingBoth100">
                  <div class="media-left">
                    <figure>
                      <img src="./../../public/assets/images/content/personDetailImg01.png" alt="">
                    </figure>
                  </div>
                  <div class="media-body ct-media-body">
                    <h4 class="media-heading ct-media-heading ct-personDetail-name text-uppercase"><span>BUAKAW PRO
                        PRAMUK</span></h4>

                    <h6 class="ct-personDetail-discipline"><span>MUAY THAI BOXING</span></h6>
                    <p class="ct-personDetail-text">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas semper.
                    </p>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personStats">
                          <h5 class="ct-personStats-header"><span>Stats</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              Specialty: <span>Kick Boxing, Fit Boxing</span>
                            </li>
                            <li>
                              Age: <span>19</span>
                            </li>
                            <li>
                              Weight: <span>62Kg</span>
                            </li>
                            <li>
                              Height: <span>175cm</span>
                            </li>
                            <li>
                              Wins / Loss / Draws: <span>9 / 0 / 0</span>
                            </li>
                          </ul>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="ct-personArchievements">
                          <h5 class="ct-personArchievements-header"><span>ARCHIEVEMENTS</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              MMA Instuctor Master
                            </li>
                            <li>
                              Black Belt MMA
                            </li>
                            <li>
                              1.st Ong Bak Tournamant 2014
                            </li>
                            <li>
                              2nd Black Belt Brazilian Jui Jitsu
                            </li>
                            <li>
                              Black Belt Muay Thai Boxing
                            </li>
                          </ul>
                        </article>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personAbilities">
                          <h5 class="ct-personAbilities-header"><span>Abilitys</span></h5>

                          <table>
                            <tbody>
                              <tr>
                                <td>Stand:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Ground:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Clinch:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Stamina:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Strength:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Speed:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="lightGalleryVideo">
                          <div data-src="https://www.youtube.com/watch?v=EaE66cI4Bz8">
                            <figure class="ct-hover-effect">
                              <img class="grayscale"
                                src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg" alt="">

                              <figcaption>
                                <div class="ct-item-hover">
                                  <div class="ct-hover-container">
                                    <div class="ct-hoverButton">
                                      <img src="./../../public/assets/images/playButton.png" alt="img">
                                    </div>

                                    <p>VIDEO</p>
                                    <p>MUAY THAI TRAINING</p>
                                  </div>
                                </div>
                              </figcaption>
                            </figure>
                          </div>
                        </article>
                      </div>
                    </div>

                    <div class="ct-u-border--darkGrey ct-u-marginTop40 ct-u-marginBottom20"></div>

                    <ul class="socialicons">
                      <li>
                        <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom"
                          title="" data-original-title="Facebook">
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

              <div class="targetItem antohny active">
                <div class="media ct-media ct-u-paddingBoth100">
                  <div class="media-left">
                    <figure>
                      <img src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg" alt="">
                    </figure>
                  </div>
                  <div class="media-body ct-media-body">
                    <h4 class="media-heading ct-media-heading ct-personDetail-name text-uppercase"><span>Anthony
                        Burns</span></h4>

                    <h6 class="ct-personDetail-discipline"><span>KICK BOXING, FIT BOXING</span></h6>
                    <p class="ct-personDetail-text">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas semper.
                    </p>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personStats">
                          <h5 class="ct-personStats-header"><span>Stats</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              Specialty: <span>Kick Boxing, Fit Boxing</span>
                            </li>
                            <li>
                              Age: <span>19</span>
                            </li>
                            <li>
                              Weight: <span>62Kg</span>
                            </li>
                            <li>
                              Height: <span>175cm</span>
                            </li>
                            <li>
                              Wins / Loss / Draws: <span>9 / 0 / 0</span>
                            </li>
                          </ul>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="ct-personArchievements">
                          <h5 class="ct-personArchievements-header"><span>ARCHIEVEMENTS</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              MMA Instuctor Master
                            </li>
                            <li>
                              Black Belt MMA
                            </li>
                            <li>
                              1.st Ong Bak Tournamant 2014
                            </li>
                            <li>
                              2nd Black Belt Brazilian Jui Jitsu
                            </li>
                            <li>
                              Black Belt Muay Thai Boxing
                            </li>
                          </ul>
                        </article>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personAbilities">
                          <h5 class="ct-personAbilities-header"><span>Abilitys</span></h5>

                          <table>
                            <tbody>
                              <tr>
                                <td>Stand:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Ground:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Clinch:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Stamina:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Strength:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Speed:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="lightGalleryVideo">
                          <div data-src="https://www.youtube.com/watch?v=EaE66cI4Bz8">
                            <figure class="ct-hover-effect">
                              <img class="grayscale"
                                src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg" alt="">

                              <figcaption>
                                <div class="ct-item-hover">
                                  <div class="ct-hover-container">
                                    <div class="ct-hoverButton">
                                      <img src="./../../public/assets/images/playButton.png" alt="img">
                                    </div>

                                    <p>VIDEO</p>
                                    <p>MUAY THAI TRAINING</p>
                                  </div>
                                </div>
                              </figcaption>
                            </figure>
                          </div>
                        </article>
                      </div>
                    </div>

                    <div class="ct-u-border--darkGrey ct-u-marginTop40 ct-u-marginBottom20"></div>

                    <ul class="socialicons">
                      <li>
                        <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom"
                          title="" data-original-title="Facebook">
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

              <div class="targetItem fabricio">
                <div class="media ct-media ct-u-paddingBoth100">
                  <div class="media-left">
                    <figure>
                      <img src="./../../public/assets/images/content/personDetailImg03.png" alt="">
                    </figure>
                  </div>
                  <div class="media-body ct-media-body">
                    <h4 class="media-heading ct-media-heading ct-personDetail-name text-uppercase"><span>Fabricio Da
                        Silva</span></h4>

                    <h6 class="ct-personDetail-discipline"><span>Brazilian Jui-Jitsu</span></h6>
                    <p class="ct-personDetail-text">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas semper.
                    </p>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personStats">
                          <h5 class="ct-personStats-header"><span>Stats</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              Specialty: <span>Kick Boxing, Fit Boxing</span>
                            </li>
                            <li>
                              Age: <span>19</span>
                            </li>
                            <li>
                              Weight: <span>62Kg</span>
                            </li>
                            <li>
                              Height: <span>175cm</span>
                            </li>
                            <li>
                              Wins / Loss / Draws: <span>9 / 0 / 0</span>
                            </li>
                          </ul>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="ct-personArchievements">
                          <h5 class="ct-personArchievements-header"><span>ARCHIEVEMENTS</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              MMA Instuctor Master
                            </li>
                            <li>
                              Black Belt MMA
                            </li>
                            <li>
                              1.st Ong Bak Tournamant 2014
                            </li>
                            <li>
                              2nd Black Belt Brazilian Jui Jitsu
                            </li>
                            <li>
                              Black Belt Muay Thai Boxing
                            </li>
                          </ul>
                        </article>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personAbilities">
                          <h5 class="ct-personAbilities-header"><span>Abilitys</span></h5>

                          <table>
                            <tbody>
                              <tr>
                                <td>Stand:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Ground:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Clinch:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Stamina:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Strength:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Speed:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="lightGalleryVideo">
                          <div data-src="https://www.youtube.com/watch?v=EaE66cI4Bz8">
                            <figure class="ct-hover-effect">
                              <img class="grayscale"
                                src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg" alt="">

                              <figcaption>
                                <div class="ct-item-hover">
                                  <div class="ct-hover-container">
                                    <div class="ct-hoverButton">
                                      <img src="./../../public/assets/images/playButton.png" alt="img">
                                    </div>

                                    <p>VIDEO</p>
                                    <p>MUAY THAI TRAINING</p>
                                  </div>
                                </div>
                              </figcaption>
                            </figure>
                          </div>
                        </article>
                      </div>
                    </div>

                    <div class="ct-u-border--darkGrey ct-u-marginTop40 ct-u-marginBottom20"></div>

                    <ul class="socialicons">
                      <li>
                        <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom"
                          title="" data-original-title="Facebook">
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

              <div class="targetItem laura">
                <div class="media ct-media ct-u-paddingBoth100">
                  <div class="media-left">
                    <figure>
                      <img src="./../../public/assets/images/content/personDetailImg01.png" alt="">
                    </figure>
                  </div>
                  <div class="media-body ct-media-body">
                    <h4 class="media-heading ct-media-heading ct-personDetail-name text-uppercase"><span>LAURA
                        JAMES</span></h4>

                    <h6 class="ct-personDetail-discipline"><span>KICK BOXING, FIT BOXING</span></h6>
                    <p class="ct-personDetail-text">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas semper.
                    </p>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personStats">
                          <h5 class="ct-personStats-header"><span>Stats</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              Specialty: <span>Kick Boxing, Fit Boxing</span>
                            </li>
                            <li>
                              Age: <span>19</span>
                            </li>
                            <li>
                              Weight: <span>62Kg</span>
                            </li>
                            <li>
                              Height: <span>175cm</span>
                            </li>
                            <li>
                              Wins / Loss / Draws: <span>9 / 0 / 0</span>
                            </li>
                          </ul>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="ct-personArchievements">
                          <h5 class="ct-personArchievements-header"><span>ARCHIEVEMENTS</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              MMA Instuctor Master
                            </li>
                            <li>
                              Black Belt MMA
                            </li>
                            <li>
                              1.st Ong Bak Tournamant 2014
                            </li>
                            <li>
                              2nd Black Belt Brazilian Jui Jitsu
                            </li>
                            <li>
                              Black Belt Muay Thai Boxing
                            </li>
                          </ul>
                        </article>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personAbilities">
                          <h5 class="ct-personAbilities-header"><span>Abilitys</span></h5>

                          <table>
                            <tbody>
                              <tr>
                                <td>Stand:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Ground:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Clinch:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Stamina:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Strength:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Speed:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="lightGalleryVideo">
                          <div data-src="https://www.youtube.com/watch?v=EaE66cI4Bz8">
                            <figure class="ct-hover-effect">
                              <img class="grayscale"
                                src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg" alt="">

                              <figcaption>
                                <div class="ct-item-hover">
                                  <div class="ct-hover-container">
                                    <div class="ct-hoverButton">
                                      <img src="./../../public/assets/images/playButton.png" alt="img">
                                    </div>

                                    <p>VIDEO</p>
                                    <p>MUAY THAI TRAINING</p>
                                  </div>
                                </div>
                              </figcaption>
                            </figure>
                          </div>
                        </article>
                      </div>
                    </div>

                    <div class="ct-u-border--darkGrey ct-u-marginTop40 ct-u-marginBottom20"></div>

                    <ul class="socialicons">
                      <li>
                        <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom"
                          title="" data-original-title="Facebook">
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

              <div class="targetItem floyd">
                <div class="media ct-media ct-u-paddingBoth100">
                  <div class="media-left">
                    <figure>
                      <img src="./../../public/assets/images/content/personDetailImg01.png" alt="">
                    </figure>
                  </div>
                  <div class="media-body ct-media-body">
                    <h4 class="media-heading ct-media-heading ct-personDetail-name text-uppercase"><span>Floyd Grow</span>
                    </h4>

                    <h6 class="ct-personDetail-discipline"><span>KICK BOXING, FIT BOXING</span></h6>
                    <p class="ct-personDetail-text">
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas semper.
                    </p>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personStats">
                          <h5 class="ct-personStats-header"><span>Stats</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              Specialty: <span>Kick Boxing, Fit Boxing</span>
                            </li>
                            <li>
                              Age: <span>19</span>
                            </li>
                            <li>
                              Weight: <span>62Kg</span>
                            </li>
                            <li>
                              Height: <span>175cm</span>
                            </li>
                            <li>
                              Wins / Loss / Draws: <span>9 / 0 / 0</span>
                            </li>
                          </ul>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="ct-personArchievements">
                          <h5 class="ct-personArchievements-header"><span>ARCHIEVEMENTS</span></h5>

                          <ul class="list-unstyled">
                            <li>
                              MMA Instuctor Master
                            </li>
                            <li>
                              Black Belt MMA
                            </li>
                            <li>
                              1.st Ong Bak Tournamant 2014
                            </li>
                            <li>
                              2nd Black Belt Brazilian Jui Jitsu
                            </li>
                            <li>
                              Black Belt Muay Thai Boxing
                            </li>
                          </ul>
                        </article>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-6">
                        <article class="ct-personAbilities">
                          <h5 class="ct-personAbilities-header"><span>Abilitys</span></h5>

                          <table>
                            <tbody>
                              <tr>
                                <td>Stand:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Ground:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Clinch:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Stamina:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Strength:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                              <tr>
                                <td>Speed:</td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                                <td>
                                  <div class="ct-personAbilities-checked"></div>
                                </td>
                              </tr>

                            </tbody>
                          </table>
                        </article>
                      </div>

                      <div class="col-lg-6">
                        <article class="lightGalleryVideo">
                          <div data-src="https://www.youtube.com/watch?v=EaE66cI4Bz8">
                            <figure class="ct-hover-effect">
                              <img class="grayscale"
                                src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg" alt="">

                              <figcaption>
                                <div class="ct-item-hover">
                                  <div class="ct-hover-container">
                                    <div class="ct-hoverButton">
                                      <img src="./../../public/assets/images/playButton.png" alt="img">
                                    </div>

                                    <p>VIDEO</p>
                                    <p>MUAY THAI TRAINING</p>
                                  </div>
                                </div>
                              </figcaption>
                            </figure>
                          </div>
                        </article>
                      </div>
                    </div>

                    <div class="ct-u-border--darkGrey ct-u-marginTop40 ct-u-marginBottom20"></div>

                    <ul class="socialicons">
                      <li>
                        <a href="https://www.facebook.com/createITpl" data-toggle="tooltip" data-placement="bottom"
                          title="" data-original-title="Facebook">
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
        </div>
      </section>


      <section id="calendars" class="section ct-u-paddingTop150 ct-u-paddingBottom200 section_4"
        data-background="./../../public/assets/images/content/filterBG.jpg"
        style="background-image: url(&quot;assets/images/content/filterBG.jpg&quot;); display: block; position: relative; float: none;">

        <div class="container">

          <div class="ct-headerBox ct-headerBox--type2">
            <div class="ct-headerBox-media">
              <img src="./../../public/assets/images/content/iconBox02.png" alt="icon">
            </div>

            <div class="ct-headerBox-body">
              <h3><span>UPCOMING EVENTS</span></h3>
            </div>
          </div>

        </div>
        <div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div id="calendar" data-snap-ignore="true" class="fc fc-ltr fc-unthemed">
                  <div class="fc-toolbar">
                    <div class="fc-left">
                      <div class="fc-button-group"><button type="button"
                          class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                            class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button"
                          class="fc-next-button fc-button fc-state-default fc-corner-right"><span
                            class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button"
                        class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button>
                    </div>
                    <div class="fc-right">
                      <div class="fc-button-group"><button type="button"
                          class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button
                          type="button" class="fc-basicWeek-button fc-button fc-state-default">week</button><button
                          type="button" class="fc-basicDay-button fc-button fc-state-default fc-corner-right">day</button>
                      </div>
                    </div>
                    <div class="fc-center">
                      <h2>February 2015</h2>
                    </div>
                    <div class="fc-clear"></div>
                  </div>
                  <div class="fc-view-container" style="">
                    <div class="fc-view fc-month-view fc-basic-view" style="">
                      <table>
                        <thead class="fc-head">
                          <tr>
                            <td class="fc-widget-header">
                              <div class="fc-row fc-widget-header">
                                <table>
                                  <thead>
                                    <tr>
                                      <th class="fc-day-header fc-widget-header fc-sun">Sun</th>
                                      <th class="fc-day-header fc-widget-header fc-mon">Mon</th>
                                      <th class="fc-day-header fc-widget-header fc-tue">Tue</th>
                                      <th class="fc-day-header fc-widget-header fc-wed">Wed</th>
                                      <th class="fc-day-header fc-widget-header fc-thu">Thu</th>
                                      <th class="fc-day-header fc-widget-header fc-fri">Fri</th>
                                      <th class="fc-day-header fc-widget-header fc-sat">Sat</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </thead>
                        <tbody class="fc-body">
                          <tr>
                            <td class="fc-widget-content">
                              <div class="fc-day-grid-container" style="">
                                <div class="fc-day-grid">
                                  <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 114px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-02-01">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-02-02">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-02-03">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-02-04">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-02-05">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-02-06">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-02-07">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-number fc-sun fc-past" data-date="2015-02-01">1</td>
                                            <td class="fc-day-number fc-mon fc-past" data-date="2015-02-02">2</td>
                                            <td class="fc-day-number fc-tue fc-past" data-date="2015-02-03">3</td>
                                            <td class="fc-day-number fc-wed fc-past" data-date="2015-02-04">4</td>
                                            <td class="fc-day-number fc-thu fc-past" data-date="2015-02-05">5</td>
                                            <td class="fc-day-number fc-fri fc-past" data-date="2015-02-06">6</td>
                                            <td class="fc-day-number fc-sat fc-past" data-date="2015-02-07">7</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"> <span class="fc-title">All Day Event</span></div>
                                                <div class="fc-resizer fc-end-resizer"></div>
                                              </a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"> <span class="fc-title">Long Event</span></div>
                                              </a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 114px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-02-08">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-02-09">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-02-10">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-02-11">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-02-12">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-02-13">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-02-14">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-number fc-sun fc-past" data-date="2015-02-08">8</td>
                                            <td class="fc-day-number fc-mon fc-past" data-date="2015-02-09">9</td>
                                            <td class="fc-day-number fc-tue fc-past" data-date="2015-02-10">10</td>
                                            <td class="fc-day-number fc-wed fc-past" data-date="2015-02-11">11</td>
                                            <td class="fc-day-number fc-thu fc-past" data-date="2015-02-12">12</td>
                                            <td class="fc-day-number fc-fri fc-past" data-date="2015-02-13">13</td>
                                            <td class="fc-day-number fc-sat fc-past" data-date="2015-02-14">14</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="fc-event-container" colspan="2"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"> <span class="fc-title">Long Event</span></div>
                                                <div class="fc-resizer fc-end-resizer"></div>
                                              </a></td>
                                            <td rowspan="6"></td>
                                            <td class="fc-event-container" colspan="2"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"> <span class="fc-title">Conference</span></div>
                                                <div class="fc-resizer fc-end-resizer"></div>
                                              </a></td>
                                            <td class="fc-event-container" rowspan="6"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">7a</span> <span
                                                    class="fc-title">Birthday Party</span></div>
                                              </a></td>
                                            <td rowspan="6"></td>
                                          </tr>
                                          <tr class="">
                                            <td rowspan="5"></td>
                                            <td class="fc-event-container" rowspan="5"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">4p</span> <span
                                                    class="fc-title">Repeating Event</span></div>
                                              </a></td>
                                            <td rowspan="5"></td>
                                            <td class="fc-event-container fc-limited"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">10:30a</span> <span
                                                    class="fc-title">Meeting</span></div>
                                              </a></td>
                                            <td class="fc-more-cell" rowspan="1">
                                              <div><a class="fc-more">+5 more</a></div>
                                            </td>
                                          </tr>
                                          <tr class="fc-limited">
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">12p</span> <span
                                                    class="fc-title">Lunch</span></div>
                                              </a></td>
                                          </tr>
                                          <tr class="fc-limited">
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">2:30p</span> <span
                                                    class="fc-title">Meeting</span></div>
                                              </a></td>
                                          </tr>
                                          <tr class="fc-limited">
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">5:30p</span> <span
                                                    class="fc-title">Happy Hour</span></div>
                                              </a></td>
                                          </tr>
                                          <tr class="fc-limited">
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">8p</span> <span
                                                    class="fc-title">Dinner</span></div>
                                              </a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 114px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-02-15">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-02-16">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-02-17">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-02-18">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-02-19">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-02-20">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-02-21">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-number fc-sun fc-past" data-date="2015-02-15">15</td>
                                            <td class="fc-day-number fc-mon fc-past" data-date="2015-02-16">16</td>
                                            <td class="fc-day-number fc-tue fc-past" data-date="2015-02-17">17</td>
                                            <td class="fc-day-number fc-wed fc-past" data-date="2015-02-18">18</td>
                                            <td class="fc-day-number fc-thu fc-past" data-date="2015-02-19">19</td>
                                            <td class="fc-day-number fc-fri fc-past" data-date="2015-02-20">20</td>
                                            <td class="fc-day-number fc-sat fc-past" data-date="2015-02-21">21</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"><span class="fc-time">4p</span> <span
                                                    class="fc-title">Repeating Event</span></div>
                                              </a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 114px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-02-22">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-02-23">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-02-24">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-02-25">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-02-26">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-02-27">
                                            </td>
                                            <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-02-28">
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-number fc-sun fc-past" data-date="2015-02-22">22</td>
                                            <td class="fc-day-number fc-mon fc-past" data-date="2015-02-23">23</td>
                                            <td class="fc-day-number fc-tue fc-past" data-date="2015-02-24">24</td>
                                            <td class="fc-day-number fc-wed fc-past" data-date="2015-02-25">25</td>
                                            <td class="fc-day-number fc-thu fc-past" data-date="2015-02-26">26</td>
                                            <td class="fc-day-number fc-fri fc-past" data-date="2015-02-27">27</td>
                                            <td class="fc-day-number fc-sat fc-past" data-date="2015-02-28">28</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="fc-event-container"><a
                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable"
                                                href="http://themeforest.net/item/dojo-martial-arts-html-template-/12839291?s_rank=2">
                                                <div class="fc-content"> <span class="fc-title">Click for Google</span>
                                                </div>
                                                <div class="fc-resizer fc-end-resizer"></div>
                                              </a></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 114px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                              data-date="2015-03-01"></td>
                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                              data-date="2015-03-02"></td>
                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                              data-date="2015-03-03"></td>
                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past"
                                              data-date="2015-03-04"></td>
                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past"
                                              data-date="2015-03-05"></td>
                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past"
                                              data-date="2015-03-06"></td>
                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-past"
                                              data-date="2015-03-07"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-number fc-sun fc-other-month fc-past"
                                              data-date="2015-03-01">1</td>
                                            <td class="fc-day-number fc-mon fc-other-month fc-past"
                                              data-date="2015-03-02">2</td>
                                            <td class="fc-day-number fc-tue fc-other-month fc-past"
                                              data-date="2015-03-03">3</td>
                                            <td class="fc-day-number fc-wed fc-other-month fc-past"
                                              data-date="2015-03-04">4</td>
                                            <td class="fc-day-number fc-thu fc-other-month fc-past"
                                              data-date="2015-03-05">5</td>
                                            <td class="fc-day-number fc-fri fc-other-month fc-past"
                                              data-date="2015-03-06">6</td>
                                            <td class="fc-day-number fc-sat fc-other-month fc-past"
                                              data-date="2015-03-07">7</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 119px;">
                                    <div class="fc-bg">
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                              data-date="2015-03-08"></td>
                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                              data-date="2015-03-09"></td>
                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                              data-date="2015-03-10"></td>
                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past"
                                              data-date="2015-03-11"></td>
                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past"
                                              data-date="2015-03-12"></td>
                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-past"
                                              data-date="2015-03-13"></td>
                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-past"
                                              data-date="2015-03-14"></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-content-skeleton">
                                      <table>
                                        <thead>
                                          <tr>
                                            <td class="fc-day-number fc-sun fc-other-month fc-past"
                                              data-date="2015-03-08">8</td>
                                            <td class="fc-day-number fc-mon fc-other-month fc-past"
                                              data-date="2015-03-09">9</td>
                                            <td class="fc-day-number fc-tue fc-other-month fc-past"
                                              data-date="2015-03-10">10</td>
                                            <td class="fc-day-number fc-wed fc-other-month fc-past"
                                              data-date="2015-03-11">11</td>
                                            <td class="fc-day-number fc-thu fc-other-month fc-past"
                                              data-date="2015-03-12">12</td>
                                            <td class="fc-day-number fc-fri fc-other-month fc-past"
                                              data-date="2015-03-13">13</td>
                                            <td class="fc-day-number fc-sat fc-other-month fc-past"
                                              data-date="2015-03-14">14</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section id="callToAction" class="section section_5" style="display: block; position: relative; float: none;">
        <section class="ct-mediaSection" data-type="parallax" data-height="660"
          data-background="./../../public/assets/images/content/callToActionBG.jpg" data-stellar-background-ratio="0.5"
          style="background-image: url(&quot;assets/images/content/callToActionBG.jpg&quot;); min-height: 660px; background-position: 0% 0%;">

          <div class="ct-mediaSection-inner">
            <section class="ct-callToAction ct-callToAction--type2">
              <div class="ct-callToAction-inner text-center">
                <div class="container">
                  <p class="ct-callToAction-text ct-u-marginBottom0">
                    <span>if you want</span>
                  </p>
                  <p class="ct-callToAction-text ct-u-marginBottom30">
                    <span>to be <span>the best</span></span>
                  </p>
                  <p class="ct-callToAction-text ct-u-marginBottom0">
                    <span>you gotta learn</span>
                  </p>
                  <p class="ct-callToAction-text ct-u-marginBottom90">
                    <span>from <span>the best!</span></span>
                  </p>

                  <div class="text-center">
                    <a href="single-classes.html" class="btn ct-btn--o btn-default"><span>join dojo now!</span></a>
                  </div>
                </div>
              </div>
            </section>
          </div>

        </section>

      </section>

      <section id="services" class="section ct-u-paddingTop200 section_6"
        data-background="./../../public/assets/images/content/BG01.png"
        style="background-image: url(&quot;assets/images/content/BG01.png&quot;); display: block; position: relative; float: none;">
        <div class="container">


          <div class="ct-headerBox ct-headerBox--type2">
            <div class="ct-headerBox-media">
              <img src="./../../public/assets/images/content/iconBox03.png" alt="icon">
            </div>

            <div class="ct-headerBox-body">
              <h3><span>CHOOSE YOUR MEMBERSHIP</span><small><span></span>FLEXIBLE AS POSSIBLE</small></h3>
            </div>
          </div>

        </div>


        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-lg-offset-0 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <article class="ct-pricingTable">
                <div class="ct-pricingTable-image">
                  <img src="./../../public/assets/images/content/pexels-nathan-cowley-1153369.jpg" alt="icon">
                </div>


                <div class="ct-pricingTable-price m-0 text-center">
                  <h5>{{ Program_Products.name }}</h5>
                </div>

                <p class="ct-pricingTable-text m-0 text-center">
                  {{ Program_Products.title }}
                </p>
                <p class="ct-pricingTable-text m-0 text-center">
                  {{ Program_Products.price }}
                </p>
                <p class="ct-pricingTable-text m-0 text-center">
                  {{ Program_Products.description }}
                </p>

                <div class="text-center ct-u-marginTop80" v-if="token != null">
                  <a class="btn ct-btn--o btn-default" @click="download(Program_Products.id)"><span>Download</span></a>
                </div>

              </article>
            </div>

            <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
              <article class="ct-pricingTable ct-pricingTable-primary">
                <div class="ct-pricingTable-image">
                  <img src="./../../public/assets/images/content/pexels-pikx-by-panther-1547248.jpg" alt="icon">
                </div>
                <div class="ct-pricingTable-price m-0 text-center">
                  <h5>{{ Subs_Products.name }}</h5>
                </div>

                <p class="ct-pricingTable-text m-0 text-center">
                  {{ Subs_Products.title }}
                </p>
                <p class="ct-pricingTable-text m-0 text-center">
                  {{ Subs_Products.price }}
                </p>
                <p class="ct-pricingTable-text m-0 text-center">
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
                  <img src="./../../public/assets/images/content/pexels-nathan-cowley-1153369.jpg" alt="icon">
                </div>

                <h3 class="ct-pricingTables-header"><span>{{personal_program.name}}</span>
                  <small><span>{{ personal_program.title }}</span></small>
                </h3>

                <!-- <div class="ct-pricingTable-price">
                  <span>{{personal_program.price}}</span>
                </div> -->
                <p class="ct-pricingTable-text m-0 text-center">
                  {{ personal_program.price }}
                </p>
                <p class="ct-pricingTable-text">
                  {{personal_program.description}}
                </p>

                <!-- <ul class="ct-pricingTable-list">
                  <li>
                    Fifo - Fly in / fly out
                  </li>
                  <li>
                    train 24hrs/day
                  </li>
                  <li>
                    1 isotonic drink free
                  </li>
                </ul> -->

                <div class="text-center ct-u-marginTop60" v-if="token != null">
                  <a class="btn ct-btn--c btn-default" @click="select_gender(personal_program.id)"><span>Choose</span></a>
                </div>
              </article>
            </div>
          </div>
        </div>

      </section>

      <section id="gallery" class="section ct-u-paddingTop100 section_7"
        style="display: block; position: relative; float: none;">

        <div class="container">


          <div class="ct-headerBox ct-headerBox--type2">
            <div class="ct-headerBox-media">
              <img src="./../../public/assets/images/content/iconBox07.png" alt="icon">
            </div>

            <div class="ct-headerBox-body">
              <h3><span>IMPRESSIONS FROM THE DOJO</span><small><span>FEEL FREE TO BROWSE OUR GALLERY</span></small></h3>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="ct-portfolio-filters">
            <ul class="ct-portfolio-filters-list list-unstyled list-inline">
              <li>
                <a href="#" class="ct-portfolio-filtersButton active" data-filter="*"><span
                    data-content="all">all</span></a>
              </li>
              <li>
                <a href="#" class="ct-portfolio-filtersButton" data-filter=".facility"><span
                    data-content="facility">facility</span></a>
              </li>

              <li>
                <a href="#" class="ct-portfolio-filtersButton" data-filter=".dojo"><span
                    data-content="dojo">dojo</span></a>
              </li>

              <li>
                <a href="#" class="ct-portfolio-filtersButton " data-filter=".cage"><span
                    data-content="cage">cage</span></a>
              </li>

              <li>
                <a href="#" class="ct-portfolio-filtersButton" data-filter=".gym"><span data-content="gym">gym</span></a>
              </li>
            </ul>
          </div>
        </div>


        <div class="container-fluid">

          <div class="ct-portfolio lightGallery ct-portfolio--col4 ct-portfolio-container is-loaded"
            style="position: relative; height: 494.4px;">

            <article class="ct-portfolio-item gym"
              data-src="./../../public/assets/images/content/pexels-pixabay-260447.jpg"
              style="position: absolute; left: 0px; top: 0px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-pixabay-260447.jpg" alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </article>

            <article class="ct-portfolio-item facility"
              data-src="./../../public/assets/images/content/pexels-victor-freitas-703016.jpg"
              style="position: absolute; left: 372px; top: 0px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-victor-freitas-703016.jpg" alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </article>
            <article class="ct-portfolio-item cage"
              data-src="./../../public/assets/images/content/pexels-cottonbro-studio-4761665.jpg"
              style="position: absolute; left: 744px; top: 0px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-cottonbro-studio-4761665.jpg"
                  alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </article>
            <article class="ct-portfolio-item dojo"
              data-src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg"
              style="position: absolute; left: 1116px; top: 0px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg"
                  alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>

            </article>
            <article class="ct-portfolio-item gym" data-src="https://www.youtube.com/watch?v=EaE66cI4Bz8"
              style="position: absolute; left: 0px; top: 247px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-zakaria-boumliha-2827400.jpg"
                  alt="">

                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/playButton.png" alt="img">
                      </div>

                      <p>VIDEO</p>
                      <p>MUAY THAI TRAINING</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </article>

            <article class="ct-portfolio-item facility"
              data-src="./../../public/assets/images/content/pexels-cottonbro-studio-4761668.jpg"
              style="position: absolute; left: 372px; top: 247px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-cottonbro-studio-4761668.jpg"
                  alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </article>

            <article class="ct-portfolio-item dojo"
              data-src="./../../public/assets/images/content/pexels-cottonbro-studio-4753898.jpg"
              style="position: absolute; left: 744px; top: 247px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-cottonbro-studio-4753898.jpg"
                  alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </article>

            <article class="ct-portfolio-item gym"
              data-src="./../../public/assets/images/content/pexels-leon-ardho-1552103.jpg"
              style="position: absolute; left: 1116px; top: 247px;">
              <figure class="ct-hover-effect">
                <img class="grayscale" src="./../../public/assets/images/content/pexels-leon-ardho-1552103.jpg" alt="">
                <figcaption>
                  <div class="ct-item-hover">
                    <div class="ct-hover-container">
                      <div class="ct-hoverButton">
                        <img src="./../../public/assets/images/eyeButton.png" alt="img">
                      </div>

                      <p>Cardio &amp; Gym Area</p>
                    </div>
                  </div>
                </figcaption>
              </figure>

            </article>

          </div>
        </div>

      </section>


      <section class="ct-u-paddingTop100">

        <div class="container">

          <div class="ct-headerBox ct-headerBox--type2">
            <div class="ct-headerBox-media">
              <img src="./../../public/assets/images/content/iconBox08.png" alt="icon">
            </div>

            <div class="ct-headerBox-body">
              <h3><span>WE ONLY RELY ON THE BEST</span><small><span></span>THATS WHY WE LIKE TO WORK WITH THESE
                  GUYS</small></h3>
            </div>
          </div>

        </div>


        <div class="container">
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
              <section class="ct-js-slick ct-slick ct-slick-arrow--type4 slick-initialized slick-slider" data-height="156"
                data-centerpadding="50" data-centermode="true" data-autoplay="false" data-arrows="true" data-dots="false"
                data-items="1" data-smitems="3" data-snap-ignore="true" style="min-height: 156px; height: 156px;">
                <div class="slick-list draggable" tabindex="0">
                  <div class="slick-track" style="opacity: 1; width: 3888px; transform: translate3d(-972px, 0px, 0px);">
                    <div class="item ct-company-logo slick-slide slick-cloned" style="height: 156px; width: 324px;"
                      data-slick-index="-4">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo01.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned" style="height: 156px; width: 324px;"
                      data-slick-index="-3">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo02.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned" style="height: 156px; width: 324px;"
                      data-slick-index="-2">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo03.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned slick-active"
                      style="height: 156px; width: 324px;" data-slick-index="-1">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo02.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-active slick-center"
                      style="height: 156px; width: 324px;" data-slick-index="0">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo01.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-active" style="height: 156px; width: 324px;"
                      data-slick-index="1">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo02.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide" style="height: 156px; width: 324px;"
                      data-slick-index="2">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo03.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide" style="height: 156px; width: 324px;"
                      data-slick-index="3">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo02.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned slick-center"
                      style="height: 156px; width: 324px;" data-slick-index="4">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo01.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned" style="height: 156px; width: 324px;"
                      data-slick-index="5">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo02.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned" style="height: 156px; width: 324px;"
                      data-slick-index="6">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo03.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                    <div class="item ct-company-logo slick-slide slick-cloned" style="height: 156px; width: 324px;"
                      data-slick-index="7">
                      <div class="item-inner">
                        <figure>
                          <a href="#">
                            <img src="./../../public/assets/images/content/logo02.png" alt="">
                          </a>
                        </figure>
                      </div>
                    </div>
                  </div>
                </div><button type="button" class="slick-prev" style="display: block;"><i
                    class="fa fa-angle-left"></i></button><button type="button" class="slick-next"
                  style="display: block;"><i class="fa fa-angle-right"></i></button>
              </section>
            </div>
          </div>
        </div>

      </section>


      <section id="map" class="section ct-u-paddingTop100 section_8"
        style="display: block; position: relative; float: none;">

        <div class="ct-headerBox ct-headerBox--type1">
          <div class="ct-headerBox-media">
            <img src="./../../public/assets/images/content/iconBox15.png" alt="icon">
          </div>

          <div class="ct-headerBox-body">
            <h3><span>LETS GET IN CONTACT</span> <small><span>WE ARE HAPPY TO HEAR SOMETHING FROM YOU</span></small></h3>
          </div>
        </div>

        <div class="ct-map-container">
          <div class="ct-map lollipop" data-height="355" style="min-height: 355px;">
            <div class="ct-googleMap ct-js-googleMap" id="map_canvas" style="position: relative; overflow: hidden;">
              <div
                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                <div class="gm-style"
                  style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                  <div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button"
                      style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button>
                  </div>
                  <div tabindex="0" aria-label="Map" aria-roledescription="map" role="region"
                    style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"
                    aria-describedby="7B6D0269-2057-4ADA-B834-43FD62A5FE17">
                    <div
                      style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                      <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                          <div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -41, -113);">
                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                            <div style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px;">
                              <div style="width: 256px; height: 256px;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                      <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                      <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                        <div
                          style="width: 62px; height: 62px; overflow: hidden; position: absolute; left: -31px; top: -62px; z-index: 0;">
                          <img alt="" src="./../../public/assets/images/marker.png" draggable="false"
                            style="position: absolute; left: 0px; top: 0px; user-select: none; width: 62px; height: 62px; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                        </div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                          <div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -41, -113);">
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -768px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: -256px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 0px;">
                            </div>
                            <div
                              style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 768px; top: 256px;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                        <div style="position: absolute; z-index: 984; transform: matrix(1, 0, 0, 1, -41, -113);">
                          <div
                            style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36592!3i21578!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=95600"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36593!3i21578!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=43596"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36594!3i21578!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=122663"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36594!3i21579!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=123111"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36594!3i21580!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=115990"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36593!3i21580!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=36923"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36592!3i21580!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=88927"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36591!3i21580!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=9860"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36591!3i21579!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=25726"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36591!3i21578!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=25278"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36595!3i21578!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=70659"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36595!3i21579!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=71107"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36595!3i21580!4i256!2m3!1e0!2sm!3i648388245!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=3442"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36590!3i21580!4i256!2m3!1e0!2sm!3i648388197!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=93673"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36590!3i21579!4i256!2m3!1e0!2sm!3i648388317!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=19759"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36590!3i21578!4i256!2m3!1e0!2sm!3i648388317!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=19311"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36593!3i21579!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=44044"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36592!3i21579!4i256!2m3!1e0!2sm!3i648388377!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=104793"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36596!3i21578!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=18655"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36596!3i21579!4i256!2m3!1e0!2sm!3i648388413!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=19103"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                          <div
                            style="position: absolute; left: 768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                            <img draggable="false" alt="" role="presentation"
                              src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i36596!3i21580!4i256!2m3!1e0!2sm!3i648388401!2m3!1e2!6m1!3e5!3m17!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!5m1!5f2!23i1379903&amp;token=86845"
                              style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                      <div
                        style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span
                            id="9825ED70-6980-42E5-90A9-D3535D609543" style="display: none;">To navigate, press the arrow
                            keys.</span>
                          <div title="DOJO MARTIAL ARTS SCHOOL" aria-label="DOJO MARTIAL ARTS SCHOOL" role="button"
                            tabindex="0" aria-describedby="9825ED70-6980-42E5-90A9-D3535D609543"
                            style="width: 62px; height: 62px; overflow: hidden; position: absolute; cursor: pointer; touch-action: none; left: -31px; top: -62px; z-index: 0;">
                            <img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false"
                              style="width: 62px; height: 62px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                          </div>
                        </div>
                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                      </div>
                    </div>
                    <div class="gm-style-moc"
                      style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                      <p class="gm-style-mot"></p>
                    </div>
                    <div class="LGLeeN-keyboard-shortcuts-view" id="7B6D0269-2057-4ADA-B834-43FD62A5FE17"
                      style="display: none;">
                      <table>
                        <tbody>
                          <tr>
                            <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                aria-label="Left arrow">←</kbd></td>
                            <td aria-label="Move left.">Move left</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                aria-label="Right arrow">→</kbd></td>
                            <td aria-label="Move right.">Move right</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                aria-label="Up arrow">↑</kbd></td>
                            <td aria-label="Move up.">Move up</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                aria-label="Down arrow">↓</kbd></td>
                            <td aria-label="Move down.">Move down</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd
                                class="VdnQmO-keyboard-shortcuts-view--shortcut-key">+</kbd></td>
                            <td aria-label="Zoom in.">Zoom in</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd
                                class="VdnQmO-keyboard-shortcuts-view--shortcut-key">-</kbd></td>
                            <td aria-label="Zoom out.">Zoom out</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd
                                class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Home</kbd></td>
                            <td aria-label="Jump left by 75%.">Jump left by 75%</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd
                                class="VdnQmO-keyboard-shortcuts-view--shortcut-key">End</kbd></td>
                            <td aria-label="Jump right by 75%.">Jump right by 75%</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Page
                                Up</kbd></td>
                            <td aria-label="Jump up by 75%.">Jump up by 75%</td>
                          </tr>
                          <tr>
                            <td style="text-align: right;"><kbd class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Page
                                Down</kbd></td>
                            <td aria-label="Jump down by 75%.">Jump down by 75%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
                    style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                  <div
                    style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);">
                  </div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view"
                      type="button" aria-pressed="false" class="gm-control-active gm-fullscreen-control"
                      style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img
                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                        alt="" style="height: 18px; width: 18px;"><img
                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                        alt="" style="height: 18px; width: 18px;"><img
                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                        alt="" style="height: 18px; width: 18px;"></button></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div>
                    <div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a
                        target="_blank" rel="noopener" title="Open this area in Google Maps (opens a new window)"
                        aria-label="Open this area in Google Maps (opens a new window)"
                        href="https://maps.google.com/maps?ll=52.229676,21.012229&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                        style="display: inline;">
                        <div style="width: 66px; height: 26px;"><img alt="Google"
                            src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.3%22%20fill%3D%22%23000%22%20stroke%3D%22%23000%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39009%2024.8656%209.39009%2021.7783%209.39009%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2961%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39009%2035.7387%209.39009%2032.6513%209.39009%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22081v-.75H52.0788V20.4412H55.7387V5.22081z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868zM29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594zM40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594zM51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084zM54.9887%205.22081V19.6912H52.8288V5.22081H54.9887zM63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23fff%22/%3E%3C/svg%3E"
                            draggable="false"
                            style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                        </div>
                      </a></div>
                  </div>
                  <div></div>
                  <div>
                    <div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                      <div class="gmnoprint" style="z-index: 1000001;">
                        <div draggable="false" class="gm-style-cc"
                          style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                          <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                            <div style="width: 1px;"></div>
                            <div
                              style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                            </div>
                          </div>
                          <div
                            style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                            <button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts"
                              type="button"
                              style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Keyboard
                              shortcuts</button>
                          </div>
                        </div>
                      </div>
                      <div class="gmnoprint" style="z-index: 1000001;">
                        <div draggable="false" class="gm-style-cc"
                          style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                          <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                            <div style="width: 1px;"></div>
                            <div
                              style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                            </div>
                          </div>
                          <div
                            style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                            <button draggable="false" aria-label="Map Data" title="Map Data" type="button"
                              style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Map
                              Data</button><span style="">Map data ©2023 Google</span>
                          </div>
                        </div>
                      </div>
                      <div class="gmnoscreen">
                        <div
                          style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                          Map data ©2023 Google</div>
                      </div><button draggable="false" aria-label="Map Scale: 100 m per 68 pixels"
                        title="Map Scale: 100 m per 68 pixels" type="button" class="gm-style-cc"
                        aria-describedby="391024BD-D348-440D-A3E4-8A3F72899BE5"
                        style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">
                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                          <div style="width: 1px;"></div>
                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                          </div>
                        </div>
                        <div
                          style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                          <span>100 m&nbsp;</span>
                          <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 72px;">
                            <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                            <div
                              style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);">
                            </div>
                            <div
                              style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;">
                            </div>
                            <div
                              style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;">
                            </div>
                            <div
                              style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);">
                            </div>
                            <div
                              style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;">
                            </div>
                          </div>
                        </div><span id="391024BD-D348-440D-A3E4-8A3F72899BE5" style="display: none;">Click to toggle
                          between metric and imperial units</span>
                      </button>
                      <div class="gmnoprint gm-style-cc" draggable="false"
                        style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;">
                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                          <div style="width: 1px;"></div>
                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                          </div>
                        </div>
                        <div
                          style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                          <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank"
                            rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms of
                            Use</a>
                        </div>
                      </div>
                      <div draggable="false" class="gm-style-cc"
                        style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                          <div style="width: 1px;"></div>
                          <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                          </div>
                        </div>
                        <div
                          style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                          <a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google"
                            dir="ltr"
                            href="https://www.google.com/maps/@52.229676,21.012229,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                            style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report
                            a map error</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                <div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false"
                    style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;">
                </div>
                <div style="line-height: 20px; margin: 15px 0px;"><span
                    style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps
                    correctly.</span></div>
                <table style="width: 100%;">
                  <tr>
                    <td style="line-height: 16px; vertical-align: middle;"><a
                        href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors"
                        target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own
                        this website?</a></td>
                    <td style="text-align: right;"><button class="dismissButton">OK</button></td>
                  </tr>
                </table>
              </div>
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
              <div class="row ct-u-marginBottom30">
                <div class="col-md-6">
                  <div class="ct-form-header ct-u-marginBottom30">
                    <img src="./../../public/assets/images/content/formLogo.png" alt="">
                    <h2><span>Dojo</span></h2>

                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                      Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                      amet quam egestas semper. Aenean ultricies mi
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="ct-contactInfo ct-u-marginBottom30">

                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-mobile"></i> <a href="tel:123-456-7890">123-456-7890</a>/<a
                          href="tel:123-456-789-1">123-456-789-1</a>
                      </li>
                      <li>
                        <i class="fa fa-map-marker"></i> 666 Broadway, Ground Fl. New York City, NY 10017
                      </li>
                      <li>
                        <i class="fa fa-envelope-o"></i> <a href="www.dojo-template.com">www.dojo-template.com</a> /<a
                          href="www.dojo-alternative-page.com">www.dojo-alternative-page.com</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group ct-u-marginBottom30">
                    <input type="text" class="form-control" id="firstName" required="" name="field[]"
                      placeholder="First Name" style="height: 40px;">
                    <label for="firstName">First Name</label>
                  </div>

                  <div class="form-group ct-u-marginBottom30">
                    <input type="text" class="form-control" id="adress" required="" name="field[]" placeholder="Adress"
                      style="height: 40px;">
                    <label for="adress">Adress</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group ct-u-marginBottom30">
                    <input type="text" class="form-control" id="lastName" required="" name="field[]"
                      placeholder="Last Name" style="height: 40px;">
                    <label for="lastName">Last Name</label>
                  </div>

                  <div class="form-group ct-u-marginBottom30">
                    <input type="email" class="form-control" id="email" required="" name="field[]" placeholder="Email"
                      style="height: 40px;">
                    <label for="email">E-mail</label>
                  </div>
                </div>
              </div>

              <div class="row col-12 p-0 ml-1">
                <div class="col-12 ct-u-marginBottom30 p-0">
                  <div class="form-group">
                    <textarea class="form-control" id="textarea" rows="7" required="" name="field[]"
                      placeholder="Message"></textarea>
                    <label for="textarea">Message</label>
                  </div>
                </div>

                <div class="col-12 p-0">
                  <div class="form-group">
                    <div class="row col-12 p-0">
                      <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn btn-block ct-btn--o btn-default"><span>Submit</span></button>
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
          <div class="container">
            <h5 class="ct-callToAction-header text-uppercase text-center">Subscribe to our Newsletter for latest news</h5>


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
              <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                  <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-7">
                      <div class="form-group">
                        <input type="text" class="form-control input-lg" id="subscribe" placeholder="E-mail" required=""
                          name="field[]" style="height:50px">
                        <label for="subscribe">You e-mail Adress</label>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-5">
                      <button type="submit"
                        class="btn btn-block ct-btn--o btn-default ct-u-ls-2"><span>Subscribe</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>

    </main>
    <FooterComponent />


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
      token: null
    }
  },
  components: {
    HeaderComponent,
    FooterComponent,
  },
  methods: {
    async getProductSubs() {

      const response = await axios.get('/product/subscription/user');
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
      const response = await axios.get('/product/program/user');
      this.Program_Products = response.data;
    },
    async getProductpersonnalProgram() {
      const response = await axios.get('/product/personal-program/user');
      this.personal_program = response.data;
    },
    async select_gender(id){
      this.$store.commit('setproduct_id',id)
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
    this.getProductSubs();
    this.getProductpersonnalProgram();
    this.token = localStorage.getItem('token');
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
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
}
</style>
