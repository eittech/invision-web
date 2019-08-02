<?php
// Cargamos el archivo de fijación de idioma
include "lang.php";
// Obtiene el nombre de la página actual
include "check_url.php";
// Cargamos archivo de configuraciones globales
include "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143936045-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143936045-1');
</script>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title><?php echo $lang['home']['title']; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/invision_favicon.png">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' href='css/holding.css'>
    <link rel='stylesheet' href='css/custom.css'>

</head>

<body class="home page template-slider color-custom style-simple layout-full-width nice-scroll-on mobile-tb-left button-stroke no-content-padding header-transparent header-fw minimalist-header-no sticky-header sticky-dark ab-hide subheader-both-center menuo-right menuo-no-borders footer-sliding footer-copy-center">
    <div id="Wrapper">
        <div id="Header_wrapper" style="background-color:#FFFFFF !important;" class="bg-parallax" data-enllax-ratio="0.3">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="index.html" title="Invision Real Estate Investments"><img class="logo-main   scale-with-grid" src="images/invision_logo.png" alt="Invision - logo" /><img class="logo-sticky scale-with-grid" src="images/invision_logo_retina.png" alt=""><img class="logo-mobile scale-with-grid" src="images/invision_logo.png" alt="">
                                    </a>
                                </div>
                                <!-- Apertura Menu -->
                                <?php include "menu.php"; ?>
                                <!-- Cierre Menu -->
                                <div class="secondary_menu_wrapper"></div>
                                <div class="banner_wrapper"></div>
                                <div class="search_wrapper">
                                    <form method="get" id="searchform" action="#">
                                        <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                        <input type="text" class="field" name="s" id="s" placeholder="Enter your search" />
                                        <input type="submit" class="submit" value="" style="display:none;" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="Subheader" class="polygon" style="padding:240px 0 180px;background-image: url('images/contact_invision_slider.jpg') !important;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?php echo $lang['contact']['header_title']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
										
                        <div class="section mcb-section" style="padding-top:80px; padding-bottom:50px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr align_center">
                                                <div class="title-h2-contact-1" style="border: 4px solid #a0915f; padding: 30px 40px;">
                                                    <h2 class="themecolor" style="margin: 0;">USA +1 954 843 3500</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 40px;" />
                                        </div>
                                        <div class="column mcb-column one-third column_column">
                                            <div class="column_attr" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                                <h3><?php echo $lang['contact']['title_redes_social']; ?></h3>
                                                <p>
                                                   <a target="_blank" rel="nofollow" style="font-size: 22px;"  href="https://www.linkedin.com/company/invisionrealestate"><br><i class="icon-linkedin-circled"></i></a><a target="_blank" rel="nofollow" style="font-size: 22px;" href="https://www.facebook.com/invisionrealestateinvestments"><i class="icon-facebook-circled"></i></a><a target="_blank" rel="nofollow" style="font-size: 22px;" target="_blank" rel="nofollow" href="https://www.instagram.com/invisionrealestate"><i class="icon-instagram"></i></a>
                                                </p>
                                                <p style="margin-bottom: 10px;">
                                                    <a>INVISION</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_column">
                                            <div class="column_attr" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                                <h3><?php echo $lang['contact']['title_email']; ?></h3>
                                                <br>
												<hp class="big">
                                                     <a style="margin: -5.8% !important;" href="mailto:info@invisionrealestateinvestments.com">info@invisionrealestateinvestments.com</a>
                                                </p>
                                                <p>
                                                   <br>
                                                </p>
                                            </div>
                                        </div>
										<div class="column mcb-column one-third column_column">
                                            <div class="column_attr" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                                <h3><?php echo $lang['contact']['title_location']; ?></h3>
                                                <div style="display: inline-block; width: 80px; height: 3px; background: #a0915f; margin-bottom: 15px;"></div>
                                                <p class="big">
                                                    4000 Hollywood Blvd. Suíte 555S Hollywood, Flórida, USA, 33021.
                                                </p>
                     
												
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hr_wide " hidden>
                          <hr>
                        </div> 
                        <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;" hidden>
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-sixth column_placeholder">
                                            <div class="placeholder">
                                                &nbsp;
                                            </div>
                                        </div>
                                        <div class="column mcb-column two-third column_column">
                                            <div class="column_attr align_center">
                                                <h2><?php echo $lang['contact']['title_contact']; ?></h2>
                                                <hr class="no_line" style="margin: 0 auto 25px;" />
                                                <div id="contactWrapper">
                                                    <form id="contactform">
                                                        <div class="column one-second">
                                                            <input placeholder="<?php echo $lang['contact']['name']; ?>" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one-second">
                                                            <input placeholder="<?php echo $lang['contact']['email']; ?>" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <input placeholder="<?php echo $lang['contact']['subject']; ?>" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                        </div>
                                                        <div class="column one">
                                                            <textarea placeholder="<?php echo $lang['contact']['message']; ?>" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                        </div>
                                                        <div class="column one">
                                                            <input type="button" value="<?php echo $lang['contact']['send']; ?>" id="submit" onClick="return check_values();">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 30px;" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                        <div class="column one">
                                <a style="margin-left: 92% !important;" id="back_to_top" href="#" class="button button_left button_js">
                                    <span class="button_icon">
                                        <i class="icon-up-open-big"></i>
                                    </span>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apertura Footer -->
        <?php include "footer.php"; ?>
        <!-- Cierre Footer -->
    </div>

    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>
    <script src="js/email.js"></script>

    <script>
        function google_maps_56d3fb751000c() {
            var latlng = new google.maps.LatLng(-33.8710, 151.2039);
            var draggable = true;
            var myOptions = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#2e1f14"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#ded9cb"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{
                        "saturation": -100
                    }, {
                        "lightness": 45
                    }, {
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "simplified"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{
                        "color": "#9b8c62"
                    }, {
                        "visibility": "on"
                    }, {
                        "saturation": "0"
                    }, {
                        "lightness": "50"
                    }]
                }],
                draggable: draggable,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-56d3fb751000c"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "images/home_holding_pin.png",
                map: map
            });
        }
        jQuery(document).ready(function($) {
            google_maps_56d3fb751000c();
        });
    </script>

    <script id="mfn-dnmc-retina-js">
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/invision_logo_retina.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/invision_logo_retina.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "images/invision_logo_retina.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>
</body>

</html>
