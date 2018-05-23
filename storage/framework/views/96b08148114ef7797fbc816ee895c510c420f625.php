<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo e(Html::style('assets/css/index.css')); ?>

    <?php echo e(Html::style('assets/css/master.css')); ?>

    <?php echo e(Html::script('assets/plugins/jquery/jquery-1.11.3.min.js')); ?>


    <title>  <?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?> </title>
</head>
<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


<div class="layout-theme animated-css" id="wrapper" data-header="sticky" data-header-top="700">

    <div id="sb-site">

        <div class="wrap-content">
    <?php echo $__env->yieldContent('header'); ?>

    

    <?php echo $__env->yieldContent('content1'); ?>

            <div class="section-bg_mod-c wow bounceInUp" data-wow-duration="2s">
                <div class="container">
                    <div class="slider-goods slider-type-a slider_mod-a owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel"
                         data-pagination="false"
                         data-navigation="true"
                         data-single-item="true"
                         data-auto-play="7000"
                         data-transition-style="fade"
                         data-main-text-animation="true"
                         data-after-init-delay="3000"
                         data-after-move-delay="1000"
                         data-stop-on-hover="true">

                        <div class="slider-type-a__item">
                            <div class="slider-type-a__img"><img class="img-responsive" src="assets/media/slider-other/1.png" height="617" width="618" alt="Foto"></div>
                            <div class="slider-type-a__inner">
                                <div class="slider-type-a__name">Peri-Peri</div>
                                <div class="slider-type-a__price">$18 - $37</div>
                                <div class="slider-type-a__description">Marinated Chicken Breast Fillets, Shallots, Roasted Capsicum, Caramelised Onions & Bocconcini on a Tomato base, topped with Peri-Peri sauce</div>
                                <a class="ui-btn ui-btn-primary btn-effect" href="javascript:void(0);">order now</a>
                            </div>
                        </div>

                        <div class="slider-type-a__item">
                            <div class="slider-type-a__img"><img class="img-responsive" src="assets/media/slider-other/1.png" height="617" width="618" alt="Foto"></div>
                            <div class="slider-type-a__inner">
                                <div class="slider-type-a__name">Peri-Peri</div>
                                <div class="slider-type-a__price">$18 - $37</div>
                                <div class="slider-type-a__description">Marinated Chicken Breast Fillets, Shallots, Roasted Capsicum, Caramelised Onions & Bocconcini on a Tomato base, topped with Peri-Peri sauce</div>
                                <a class="ui-btn ui-btn-primary btn-effect" href="javascript:void(0);">order now</a>
                            </div>
                        </div>

                    </div>
                    <!-- end slider -->
                </div>
                <!-- end container -->
            </div>
            <!-- end section-bg_mod-c -->


            <section class="section-default">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="ui-title-block wow fadeInUp" data-wow-duration="2s">Build Your Own Pizza</h2>
                            <p class="ui-subtitle-block wow fadeInUp" data-wow-duration="2s">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.</p>

                            <div class="accordion accordion_mod-a panel-group rtd" id="accordion-1">
                                <div class="panel panel-default wow fadeInUp" data-wow-duration="2s">
                                    <div class="panel-heading">
                                        <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i></a>
                                        <h3 class="panel-title ui-title-inner"><span class="panel-title__number">1.</span>Choose Your Crust</h3>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel-img border-effect">
                                                        <div class="border-effect__top"></div>
                                                        <div class="border-effect__right"></div>
                                                        <div class="border-effect__bottom"></div>
                                                        <div class="border-effect__left"></div>
                                                        <img class="img-responsive" src="assets/media/accordion/accordion_mod-a_1.jpg" height="330" width="500" alt="Foto">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>What’s a pizza without brilliant cheese? Pick one or blend ‘em for that bohemian artisan feel. Choose from five different types of cheeses, each are perfect for any style of pizza or personal taste.</p>
                                                    <ul class="list_mod-b">
                                                        <li>Mozzarella</li>
                                                        <li>Goat cheese</li>
                                                        <li>Canadian cheddar</li>
                                                        <li>Formaggio blend (asiago, romano + parmesan)</li>
                                                        <li>Feta cheese</li>
                                                        <li>Cheddar cheese</li>
                                                        <li>Parmigiano cheese</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2"><i class="icon"></i></a>
                                        <h3 class="panel-title ui-title-inner"><span class="panel-title__number">2.</span>Select Your Sauce</h3>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel-img border-effect">
                                                        <div class="border-effect__top"></div>
                                                        <div class="border-effect__right"></div>
                                                        <div class="border-effect__bottom"></div>
                                                        <div class="border-effect__left"></div>
                                                        <img class="img-responsive" src="assets/media/accordion/accordion_mod-a_1.jpg" height="330" width="500" alt="Foto">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>What’s a pizza without brilliant cheese? Pick one or blend ‘em for that bohemian artisan feel. Choose from five different types of cheeses, each are perfect for any style of pizza or personal taste.</p>
                                                    <ul class="list_mod-b">
                                                        <li>Mozzarella</li>
                                                        <li>Goat cheese</li>
                                                        <li>Canadian cheddar</li>
                                                        <li>Formaggio blend (asiago, romano + parmesan)</li>
                                                        <li>Feta cheese</li>
                                                        <li>Cheddar cheese</li>
                                                        <li>Parmigiano cheese</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel wow fadeInUp" data-wow-duration="2s" data-wow-delay="1s">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i></a>
                                        <h3 class="panel-title ui-title-inner"><span class="panel-title__number">3.</span>Add Cheese</h3>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel-img border-effect">
                                                        <div class="border-effect__top"></div>
                                                        <div class="border-effect__right"></div>
                                                        <div class="border-effect__bottom"></div>
                                                        <div class="border-effect__left"></div>
                                                        <img class="img-responsive" src="assets/media/accordion/accordion_mod-a_1.jpg" height="330" width="500" alt="Foto">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>What’s a pizza without brilliant cheese? Pick one or blend ‘em for that bohemian artisan feel. Choose from five different types of cheeses, each are perfect for any style of pizza or personal taste.</p>
                                                    <ul class="list_mod-b">
                                                        <li>Mozzarella</li>
                                                        <li>Goat cheese</li>
                                                        <li>Canadian cheddar</li>
                                                        <li>Formaggio blend (asiago, romano + parmesan)</li>
                                                        <li>Feta cheese</li>
                                                        <li>Cheddar cheese</li>
                                                        <li>Parmigiano cheese</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i></a>
                                        <h3 class="panel-title ui-title-inner"><span class="panel-title__number">4.</span>Choose Your Toppings</h3>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="panel-img border-effect">
                                                        <div class="border-effect__top"></div>
                                                        <div class="border-effect__right"></div>
                                                        <div class="border-effect__bottom"></div>
                                                        <div class="border-effect__left"></div>
                                                        <img class="img-responsive" src="assets/media/accordion/accordion_mod-a_1.jpg" height="330" width="500" alt="Foto">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>What’s a pizza without brilliant cheese? Pick one or blend ‘em for that bohemian artisan feel. Choose from five different types of cheeses, each are perfect for any style of pizza or personal taste.</p>
                                                    <ul class="list_mod-b">
                                                        <li>Mozzarella</li>
                                                        <li>Goat cheese</li>
                                                        <li>Canadian cheddar</li>
                                                        <li>Formaggio blend (asiago, romano + parmesan)</li>
                                                        <li>Feta cheese</li>
                                                        <li>Cheddar cheese</li>
                                                        <li>Parmigiano cheese</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->
                                <div class="text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s"><a class="btn-accordion-builder ui-btn ui-btn-primary btn-effect" href="javascript:void(0);">CREATE YOUR OWN PIZZA</a></div>
                            </div>
                            <!-- end accordion -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end section-default -->


            <div class="section-progress section-bg section-bg_mod-a wow fadeInUp" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section__inner">
                                <ul class="list-progress list-unstyled">
                                    <li class="list-progress__item clearfix">
                                        <span class="list-progress__percent chart" data-percent="5"><span class="percent"></span></span>
                                        <span class="list-progress__name">crusts</span>
                                    </li>

                                    <li class="list-progress__item clearfix">
                                        <span class="list-progress__percent chart" data-percent="17"><span class="percent"></span></span>
                                        <span class="list-progress__name">sauces</span>
                                    </li>

                                    <li class="list-progress__item clearfix">
                                        <span class="list-progress__percent chart" data-percent="8"><span class="percent"></span></span>
                                        <span class="list-progress__name">cheeses</span>
                                    </li>

                                    <li class="list-progress__item clearfix">
                                        <span class="list-progress__percent chart" data-percent="20"><span class="percent"></span></span>
                                        <span class="list-progress__name">veggies</span>
                                    </li>

                                    <li class="list-progress__item clearfix">
                                        <span class="list-progress__percent chart" data-percent="11"><span class="percent"></span></span>
                                        <span class="list-progress__name">meats</span>
                                    </li>

                                    <li class="list-progress__item clearfix">
                                        <span class="list-progress__percent chart" data-percent="36"><span class="percent"></span></span>
                                        <span class="list-progress__name">toppings</span>
                                    </li>
                                </ul>
                                <!-- end list-progress -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end section-progress -->


            <section class="section-default wow fadeInRight" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="ui-title-block">Here's what some customers are saying...</h2>
                            <p class="ui-subtitle-block">Customer service and product quality are our top priority. Although we strive to make  every customer experience as easy as possible, it’s how our customers rate us that really matters. Because it makes our customers happy! And we love making people happy.</p>

                            <div class="slider-reviews slider_mod-b owl-carousel owl-theme enable-owl-carousel"
                                 data-min320="1"
                                 data-min480="1"
                                 data-min768="2"
                                 data-min992="3"
                                 data-min1200="3"
                                 data-pagination="false"
                                 data-navigation="true"
                                 data-auto-play="4000"
                                 data-stop-on-hover="true">

                                <div class="slider-reviews__item">
                                    <div class="slider-reviews__img"><img class="center-block img-responsive" src="assets/media/slider-reviews/slider-reviews_1.png" height="170" width="171" alt="Foto"></div>
                                    <div class="slider-reviews__title">Florentine Ricotta</div>
                                    <ul class="raiting list-unstyled">
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star-o"></i></li>
                                    </ul>
                                    <div class="slider-reviews__inner">
                                        <div class="decor-top-line"><span class="decor-top-line__inner"></span></div>
                                        <div class="slider-reviews__quote">“ We are serving pizza, your pizza is the fave of our family. Pick us as the pizza winner! ”</div>
                                    </div>
                                    <cite class="slider-reviews__autor">Daniela Black<a class="slider-reviews__link" href="www.pizzatempo.com">www.pizzatempo.com</a></cite>
                                </div>

                                <div class="slider-reviews__item">
                                    <div class="slider-reviews__img"><img class="center-block img-responsive" src="assets/media/slider-reviews/slider-reviews_2.png" height="173" width="173" alt="Foto"></div>
                                    <div class="slider-reviews__title">Garlic Prawn</div>
                                    <ul class="raiting list-unstyled">
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                    </ul>
                                    <div class="slider-reviews__inner">
                                        <div class="decor-top-line"><span class="decor-top-line__inner"></span></div>
                                        <div class="slider-reviews__quote">“ We are serving pizza, your pizza is the fave of our family. Pick us as the pizza winner! ”</div>
                                    </div>
                                    <cite class="slider-reviews__autor">Eliz Bellarosa<a class="slider-reviews__link" href="www.pizzatempo.com">www.pizzatempo.com</a></cite>
                                </div>

                                <div class="slider-reviews__item">
                                    <div class="slider-reviews__img"><img class="center-block img-responsive" src="assets/media/slider-reviews/slider-reviews_3.png" height="177" width="177" alt="Foto"></div>
                                    <div class="slider-reviews__title">Kimchi BBQ Chicken</div>
                                    <ul class="raiting list-unstyled">
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star-o"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star-o"></i></li>
                                    </ul>
                                    <div class="slider-reviews__inner">
                                        <div class="decor-top-line"><span class="decor-top-line__inner"></span></div>
                                        <div class="slider-reviews__quote">“ We are serving pizza, your pizza is the fave of our family. Pick us as the pizza winner! ”</div>
                                    </div>
                                    <cite class="slider-reviews__autor">Bradley Taylor<a class="slider-reviews__link" href="www.pizzatempo.com">www.pizzatempo.com</a></cite>
                                </div>

                                <div class="slider-reviews__item">
                                    <div class="slider-reviews__img"><img class="center-block img-responsive" src="assets/media/slider-reviews/slider-reviews_2.png" height="173" width="173" alt="Foto"></div>
                                    <div class="slider-reviews__title">Garlic Prawn</div>
                                    <ul class="raiting blocks-inline">
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                        <li class="raiting__item"><i class="icon fa fa-star"></i></li>
                                    </ul>
                                    <div class="slider-reviews__inner">
                                        <div class="decor-top-line"><span class="decor-top-line__inner"></span></div>
                                        <div class="slider-reviews__quote">“ We are serving pizza, your pizza is the fave of our family. Pick us as the pizza winner! ”</div>
                                    </div>
                                    <cite class="slider-reviews__autor">Eliz Bellarosa<a class="slider-reviews__link" href="www.pizzatempo.com">www.pizzatempo.com</a></cite>
                                </div>

                            </div>
                            <!-- end slider-reviews -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end section-default -->


            <section class="section_mod-a section-bg section-bg_mod-b wow fadeInUp" data-wow-duration="2s">
                <div class="section__inner block-a rtd">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 wow fadeInLeft" data-wow-duration="2s">
                                <img class="block-a__img img-responsive" src="assets/media/img-1.png" height="752" width="369" alt="Mobile">
                            </div>
                            <!-- end col -->
                            <div class="col-md-7 col-md-offset-1 wow fadeInRight" data-wow-duration="2s">
                                <h2 class="ui-title-block">Get the newest version of our mobile app for your phone.</h2>
                                <p>Do you have an iPhone, Android device or an web-enabled mobile? Then it’s easier than ever to order hot and fresh pizza – no phone calls necessary! Mobile ordering lets you access all the best features in a format that’s tailored to the screen size of your mobile phone, find special online offers and order your favorite pizza and sides in a flash.</p>
                                <h3 class="ui-title-inner">Here's why it's great:</h3>
                                <ul class="list_mod-b">
                                    <li>It's free</li>
                                    <li>No registration required</li>
                                    <li>Order from the full menu</li>
                                    <li>Find local deals</li>
                                    <li>Pay directly from the app</li>
                                </ul>
                                <a class="ui-btn ui-btn-primary ui-btn_with_icon btn-effect" href="javascript:void(0);"><i class="icon fa fa-apple"></i>download iPhone App</a>
                                <a class="ui-btn ui-btn-primary ui-btn_with_icon btn-effect" href="javascript:void(0);"><i class="icon fa fa-android"></i>download Android App</a>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
            </section>
            <!-- end section_mod-a -->


            <section class="section-default wow fadeInUp" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="ui-title-block">Latest News & Recipes</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <article class="post post_mod-a clearfix wow fadeInRight" data-wow-duration="2s">
                                        <div class="entry-media">
                                            <a href="assets/media/post/320x255/post_320x255_img-1.jpg" rel="prettyPhoto">
                                                <img class="img-responsive" src="assets/media/post/320x255/post_320x255_img-1.jpg" height="255" width="320" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-main">
                                            <div class="entry-header">
                                                <div class="entry-meta"><time datetime="2012-10-27 15:20"><a href="javascript:void(0);">January 22, 2015</a></time></div>
                                                <h2 class="entry-title ui-title-inner">Perfect Pizza Using Baking Steel Broiler Method</h2>
                                            </div>
                                            <div class="entry-content">
                                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            </div>
                                        </div>
                                        <footer class="entry-footer clearfix">
                                            <a class="ui-btn ui-btn-primary btn-effect" href="javascript:void(0);">read more</a>
                                        </footer>
                                    </article><!-- end post -->
                                </div>

                                <div class="col-md-4">
                                    <article class="post post_mod-a clearfix wow fadeInUp" data-wow-duration="2s">
                                        <div class="entry-media">
                                            <a href="assets/media/post/320x255/post_320x255_img-2.jpg" rel="prettyPhoto">
                                                <img class="img-responsive" src="assets/media/post/320x255/post_320x255_img-2.jpg" height="255" width="320" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-main">
                                            <div class="entry-header">
                                                <div class="entry-meta"><time datetime="2012-10-27 15:20"><a href="javascript:void(0);">December 18, 2014</a></time></div>
                                                <h2 class="entry-title ui-title-inner">Green Onion and Burrata Cheese Pizza Recipe</h2>
                                            </div>
                                            <div class="entry-content">
                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui.</p>
                                            </div>
                                        </div>
                                        <footer class="entry-footer clearfix">
                                            <a class="ui-btn ui-btn-primary btn-effect" href="javascript:void(0);">read more</a>
                                        </footer>
                                    </article><!-- end post -->
                                </div>

                                <div class="col-md-4">
                                    <article class="post post_mod-a clearfix wow fadeInLeft" data-wow-duration="2s">
                                        <div class="entry-media">
                                            <a href="assets/media/post/320x255/post_320x255_img-3.jpg" rel="prettyPhoto">
                                                <img class="img-responsive" src="assets/media/post/320x255/post_320x255_img-3.jpg" height="255" width="320" alt="Foto">
                                            </a>
                                        </div>
                                        <div class="entry-main">
                                            <div class="entry-header">
                                                <div class="entry-meta"><time datetime="2012-10-27 15:20"><a href="javascript:void(0);">December 10, 2014</a></time></div>
                                                <h2 class="entry-title ui-title-inner">Brussels Sprouts, Pepper and Bacon Hot Pizza Recipes</h2>
                                            </div>
                                            <div class="entry-content">
                                                <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui.</p>
                                            </div>
                                        </div>
                                        <footer class="entry-footer clearfix">
                                            <a class="ui-btn ui-btn-primary btn-effect" href="javascript:void(0);">read more</a>
                                        </footer>
                                    </article><!-- end post -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>
            <!-- end section-default -->


            <div class="section-carusel wow fadeInRight" data-wow-duration="2s">
                <div class="carusel slider_mod-c owl-carousel owl-theme enable-owl-carousel"
                     data-min320="3"
                     data-min480="4"
                     data-min768="7"
                     data-min992="7"
                     data-min1200="7"
                     data-pagination="false"
                     data-navigation="true"
                     data-auto-play="4000"
                     data-stop-on-hover="true">

                    <a href="assets/media/carusel/carusel_1.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_1.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_2.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_2.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_3.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_3.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_4.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_4.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_5.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_5.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_6.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_6.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_7.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_7.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_3.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_3.jpg" height="280" width="280" alt="Foto"></a>
                    <a href="assets/media/carusel/carusel_4.jpg" rel="prettyPhoto"><img class="img-responsive" src="assets/media/carusel/carusel_4.jpg" height="280" width="280" alt="Foto"></a>
                </div>
                <!-- end carusel -->

                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="carusel-nav">follow us on instagram   <i class="icon fa fa-arrow-circle-o-right"></i> <a class="no-br" href="javascript:void(0);"># margherita pizza</a></div>
                        </div>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end section-carusel -->


            <section class="section-subscribe wow fadeInUp" data-wow-duration="2s">
                <form class="form-subscribe" action="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="ui-title-block ui-title-block_mod-a form-subscribe__title">Sign up for the newsletter and get exclusive deals.</h2>
                                <input class="form-control" type="text" placeholder="Enter your email address" required>
                                <button class="ui-btn ui-btn_mod-c btn-effect btn-effect">subscribe</button>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </form>
                <!-- end footer-form -->
            </section>
            <!-- end section-subscribe -->


            <footer class="footer wow fadeInUp" data-wow-duration="2s">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer-contacts"><span class="footer-contacts__number">+34 9 368 7050</span>order@pizza.com</div>
                            <div class="footer-decor decor-2">&</div>
                            <ul class="footer-list list-inline">
                                <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Facebook</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Twitter</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Instagram</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Pinterest</a></li>
                                <li class="footer-list__item"><a class="footer-list__link" href="javascript:void(0);">Flickr</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center">Copyright © 2015 <a class="copyright__link" href="javascript:void(0);">Margherita.</a> All rights reserved.</div>
                            </div>
                        </div>
                    </div>
                </div><!-- end copyright -->
            </footer>
            <!-- end footer -->

        </div>
        <!-- end wrap-content -->

    </div>
    <!-- end #sb-site -->


<?php echo $__env->yieldContent('sb-left'); ?>

    <div class="sb-slidebar sb-right">
        <section class="section-list-cart">
            <h2 class="ui-title-inner">Cart Totals</h2>
            <ul class="list-cart list-unstyled">
                <li class="list-cart__item">
                    <div class="list-cart__img"><i class="list-cart__icon icon fa fa-times js-del"></i><img class="img-responsive" src="assets/media/list-cart/1.png" height="87" width="87" alt="Foto"></div>
                    <div class="list-cart__inner">
                        <h3 class="list-cart__title">Moorish Lamb</h3>
                        <div class="list-cart__size"><span class="list-cart__size_name">Size:</span> Large</div>
                        <div class="list-cart__price"><span class="color_primary">1 x</span> $19.00</div>
                    </div>
                </li>
                <li class="list-cart__item">
                    <div class="list-cart__img"><i class="list-cart__icon icon fa fa-times js-del"></i><img class="img-responsive" src="assets/media/list-cart/2.png" height="87" width="87" alt="Foto"></div>
                    <div class="list-cart__inner">
                        <h3 class="list-cart__title">Vegetarian Supreme</h3>
                        <div class="list-cart__size"><span class="list-cart__size_name">Size:</span> Jumbo</div>
                        <div class="list-cart__price"><span class="color_primary">1 x</span> $34.00</div>
                    </div>
                </li>
                <li class="list-cart__item">
                    <div class="list-cart__img"><i class="list-cart__icon icon fa fa-times js-del"></i><img class="img-responsive" src="assets/media/list-cart/3.png" height="87" width="87" alt="Foto"></div>
                    <div class="list-cart__inner">
                        <h3 class="list-cart__title">Spiced Pumpkin</h3>
                        <div class="list-cart__size"><span class="list-cart__size_name">Size:</span> Small</div>
                        <div class="list-cart__price"><span class="color_primary">1 x</span> $26.00</div>
                    </div>
                </li>
            </ul>
            <div class="total-price clearfix">Order Total
                <span class="total-price__number">$79.00</span>
            </div>
            <a class="total-price__btn ui-btn ui-btn_mod-a btn-effect btn-block" href="javascript:void(0);">view shopping cart</a>
            <a class="total-price__btn ui-btn ui-btn-primary btn-effect btn-block" href="javascript:void(0);">checkout</a>
        </section>
        <!-- end list-cart -->
    </div>
    <!-- end sb-right -->

</div>
<!-- end layout-theme -->



<!-- SCRIPTS MAIN -->

<?php echo e(Html::script('assets/js/jquery-migrate-1.2.1.js')); ?>

<?php echo e(Html::script('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>

<?php echo e(Html::script('assets/js/waypoints.min.js')); ?>

<?php echo e(Html::script('js/jquery.easing.js')); ?>

<?php echo e(Html::script('assets/js/modernizr.custom.js')); ?>

<?php echo e(Html::script('assets/js/cssua.min.js')); ?>

<!-- Sidebar -->
<?php echo e(Html::script('assets/plugins/slidebars/dist/slidebars.js')); ?>

<!-- Home slider -->
<?php echo e(Html::script('assets/plugins/slider-pro/dist/js/jquery.sliderPro.js')); ?>

<!-- Sliders -->
<?php echo e(Html::script('assets/plugins/owl-carousel/owl.carousel.min.js')); ?>

<!-- Isotope -->
<?php echo e(Html::script('assets/plugins/isotope/isotope.pkgd.min.js')); ?>

<!-- Modal -->
<?php echo e(Html::script('assets/plugins/prettyphoto/js/jquery.prettyPhoto.js')); ?>

<!-- Date select -->
<?php echo e(Html::script('assets/plugins/datetimepicker/jquery.datetimepicker.js')); ?>

<!-- Select customization -->
<?php echo e(Html::script('assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')); ?>

<!-- Price slider -->
<?php echo e(Html::script('assets/plugins/nouislider/jquery.nouislider.all.min.js')); ?>

<!-- Chart -->
<?php echo e(Html::script('assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js')); ?>

<!-- Animation -->
<?php echo e(Html::script('assets/js/wow.min.js')); ?>

<!-- Scrollspy -->
<?php echo e(Html::script('assets/js/scrollspy.min.js')); ?>

<!-- Custom -->
<?php echo e(Html::script('assets/js/custom.js')); ?>

</body>
</html>


