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
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <?php
        include "header.php";
    ?>
    <!--/#header-->

     <section id="coming-soon">        
         <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">              
                    <div class="text-center coming-content">
                        <h1>Third Party Attribution</h1>
                        <p>A special thank & mention because of whom this website was possible.</p>
                    </div>                    
                </div>
            </div>       
    </section>

    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <LI>
                                <a href="http://www.flaticon.com/" target="_blank">
                                Vectors Market - flaticon.com
                                </a>
                            </LI>
                            <LI> 
                                <a href="http://www.flaticon.com/"
                                target="_blank">
                                Freepik - flaticon.com
                                </a>
                            </LI>
                        </div>
                    </div>
                </div>     
            </div>
        </div> 
    </section>


    <?php
        include "footer.php";
    ?>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/coundown-timer.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
            //Countdown js
         $("#countdown").countdown({
                date: "10 November 2016 12:00:00",
                format: "on"
            },      
            function() {
                // callback function
        });
    </script>
    
</body>
</html>