<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="CasFer Technologies">
    <title>CasFer Technologies</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />


    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>



    <?php
        include "header.php";
    ?>

    <div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="video/2.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="video/The-Launch.mp4" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="images/logo.png" alt="">
        </div>
    </div>
</div>

<!--     <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <div class="lemonada-script">Undisrupting </div>
                        </br>
                        <p>Supply chain through technology</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section> -->
    <!--/#home-slider-->

    <section id="services" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/pic01.png" alt="">
                        </div>
                        <h2>FreightRates</h2>
                        <p>Our flagship service, bringing the transporters and customer closer.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h2>Software Development</h2>
                        <p>Catering to all your software needs. Desktop, web or mobile look no further!</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <h2>Product Sourcing</h2>
                        <p>A venture based in India in the process of simplifying and revolutionizing supply chain processes for our customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">CasFer Technologies</h1>
                            <p>Some highlights and case studies we have done</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TOUR CASE STUDIES </a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

<!--     <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/delphi_development.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Embarcadero Delphi</h2>
                        <P>We have over 6 + years of experience in Delphi programming language, right from
                        Delphi 6 till RAD Studio 10.1 Berlin</P>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>Built for the Responsive Web</h2>
                        <P>Great experience in building web application using one of most favored platform for amazing single page applications!</P>
                    </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/angular_development.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="images/home/node_development.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h2>NodeJS, lightening fast!</h2>
                        <P>NodeJs is relatively new and extremely fast. If you want lightening fast reflexes in you web application then NodeJs is just what the doctor ordered!</P>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
     <!--/#features-->

<!-- http://bootsnipp.com/snippets/8xDZ -->
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="images/home/client-map.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p> Happy clients make us happy <br> Check out some of our clients (happy)! </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">        
                                <div class="item active container">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/clients/logo_1.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/clients/logo_2.png" alt="...">
<!--                                     <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="..."> -->
                                </div>
                                
<!--                                 <div class="item container">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                  </div>
                                
                                <div class="item container">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                    <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="images/home/client4.png" alt="...">
                                 </div> -->
                           </div>

                            <div align="center" style="margin-top:20px;">
                            <!-- Controls -->
                                  <a class="left" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                            </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->


    <?php
        include "footer.php";
    ?>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
    //jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}

function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;
    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}    


    </script> 
</body>
</html>
