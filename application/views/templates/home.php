
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SMP Negeri 9 Kota Sungai Penuh">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url();?>assets/img/favicon.png">

    <title>SMP Negeri 9 Kota Sungai Penuh</title>

    <!--
    * Google Fonts
    //-->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/colorbox-skins/4/colorbox.css" type="text/css">
        <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet" type="text/css">


    <link href="<?=base_url();?>assets/css/header/h1.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url();?>assets/css/color1.css" rel="stylesheet" type="text/css" id="site-color">
    <link href="<?=base_url();?>assets/css/rivathemes.css" rel="stylesheet" type="text/css">

    <!-- LayerSlider styles -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/layerslider/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/fullcalendar/dist/fullcalendar.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/js/fullcalendar/dist/fullcalendar.print.css" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/vendor/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?=base_url();?>assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>

    <body>


    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <!--

    Scroll to the top

    //-->
    <div id="to-the-top"><i class="fa fa-chevron-up"></i></div>
    <!--

    Image Preload

    //-->
    <div id="preload">
      <span>Sedang memuat..</span>
      <i class="fa fa-cog fa-spin"></i>
    </div>
    <!--

    Envor mobile menu start

    //-->
    <i class="glyphicon glyphicon-align-justify" id="mobile-menu-btn"></i>

    <!--

    Envor header start

    //-->
    <?php echo $header; ?>
    <!--

    Envor site content start

    //-->
    <div class="content">
      <!--

      LayerSlider start

      //-->
    <?php echo $content; ?>
    <!--

    Envor site content end

    //-->
    </div>
    <!--

    Envor footer start

    //-->
    <?php echo $footer; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/moment/min/moment.min.js"></script>
    <script src="<?=base_url();?>assets/js/vendor/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/fullCalendar/dist/fullCalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/fullCalendar/dist/locale/id.js"></script>

    <script src="<?=base_url();?>assets/js/vendor/core-1.0.5.js"></script>

    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.mousewheel.min.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.colorbox-min.js"></script>
    <script src="<?=base_url();?>assets/js/preloadCssImages.jQuery_v5.js"></script>
    <script src="<?=base_url();?>assets/js/jquery.stellar.min.js"></script>
    <!--
    * jQuery with jQuery Easing, and jQuery Transit JS
    //-->
    <script src="<?=base_url();?>assets/js/layerslider/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/js/layerslider/jquery-transit-modified.js" type="text/javascript"></script>
    <!--
    * LayerSlider from Kreatura Media with Transitions
    -->
    <script src="<?=base_url();?>assets/js/layerslider/layerslider.transitions.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/js/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/js/jquery.rivathemes.js"></script>
    <script type="text/javascript">
      $('document').ready(function() {
          /*

          Home Page Layer Slider

          */
          $('#layerslider').layerSlider({
            skinsPath               : '<?=base_url();?>assets/css/layerslider/skins/',
            skin : 'fullwidth',
            thumbnailNavigation : 'hover',
            hoverPrevNext : false,
            responsive : false,
            responsiveUnder : 1170,
            sublayerContainer : 1170
          });
          /*

          Latest Projects Slider

          */
          $('#latest-projects').rivaSlider({
            visible : 4,
            selector : 'project'
          });
          /*

          Our Partners Slider

          */
          $('#our-partners').rivaCarousel({
            visible : 5,
            selector : 'partner-logo',
            mobile_visible : 1
          });
          /*

          Footer News Slider

          */
          $('#footer-news').rivaSlider({
            visible : 1,
            selector : 'post-preview'
          });
          /*

          Latest News Slider

          */
          $('#latest-news').rivaSlider({
            visible : 2,
            selector : 'post-preview'
          });
          /*

          Testimonials #2 Carousel

          */
          $('#clients-testimonials').rivaCarousel({
            visible : 1,
            selector : 'testimonials-2',
            mobile_visible : 1
          });
          /*

          Sorting

          */
          $('#portfolio-sorting').rivaSorting({
            showAll : 1
          });
      });

      
    </script>
    <script src="<?=base_url();?>assets/js/envor.js"></script>
    <script type="text/javascript">
      $('document').ready(function() {
          /*

          Preload Images

          */
          var imgs = new Array(), $imgs = $('img');
          for (var i = 0; i < $imgs.length; i++) {
            imgs[i] = new Image();
            imgs[i].src = $imgs.eq(i).attr('src');
          }
          Core.preloader.queue(imgs).preload(function() {
            var images = $('a').map(function() {
                    return $(this).attr('href');
            }).get();
            Core.preloader.queue(images).preload(function() {
                  $.preloadCssImages();
            })
          })
                  $('#preload').hide();
      });
      /*

      Google Analytics Code

      */
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src='//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
      /*

      Windows Phone 8 и Internet Explorer 10

      */
      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style")
        msViewportStyle.appendChild(
          document.createTextNode(
            "@-ms-viewport{width:auto!important}"
          )
        )
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
      }
    </script>
  </body>
</html>
