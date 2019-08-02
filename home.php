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

    <!-- Retina display -->
    <link rel='stylesheet' href='css/retina_display_media.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

    <style>
            
            #carousel {
              position: relative;
              width: 100%;
              margin: 0 auto;
            }
            
            #slides {
              overflow: hidden;
              position: relative;
              width: 100%;
              height: 250px;
            }
            
            #slides ul {
              list-style: none;
              width: 100%;
              height: 250px;
              margin: 0;
              padding: 0;
              position: relative;
            }
            
            #slides li {
              width: 100%;
              height: 250px;
              float: left;
              text-align: center;
              position: relative;
              font-family: lato, sans-serif;
            }
            </style>
    

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
                                    <a id="logo" href="index.php" title="Invision Real Estate Investments"><img class="logo-main   scale-with-grid" src="images/invision_logo.png" alt="Invision - logo" /><img class="logo-sticky scale-with-grid" src="images/invision_logo_retina.png" alt=""><img class="logo-mobile scale-with-grid" src="images/invision_logo.png" alt="">
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
            <div id="rev_slider_1_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                        

						
                    <div id="rev_slider_1_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.6">
                        <ul>
                            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <img src="images/home_invision_slider_2.jpg" alt="" width="1920" height="890" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            
                                <div class="media-title-1 tp-caption mfnrs_holding_large_light tp-resizeme animate zoomInLeftLarge" data-anim-type="zoomInLeftLarge" id="slide-1-layer-2" data-x="center" data-hoffset="-297" data-y="center" data-voffset="-30" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">
                                <?php echo $lang['home']['header_title_one']; ?> </div>
                                <div class="tp-caption mfnrs_holding_small_dark   tp-resizeme animate zoomInRightLarge" id="slide-1-layer-3" data-anim-type="zoomInRightLarge" data-x="center" data-hoffset="250" data-y="center" data-voffset="138" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;text-align:right; margin: -150px 150px 0px !important; line-height: 30px;">
                                <?php echo $lang['home']['header_title_two']; ?> </div>
                                </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>	
                </div>
        </div>
        
        <div id="Content">
                <div class="content_wrapper clearfix">
                    <div class="sections_group">
                        <div class="entry-content">
                            
                            
                            <div class="section mcb-section" style="padding-top:80px; padding-bottom:0px; ">
                                <div class="section_wrapper mcb-section-inner">
                                    <div class="wrap mcb-wrap one  valign-top clearfix">
                                        <div class="mcb-wrap-inner">
                                            <div class="column mcb-column one-third column_column">
                                                <div class="column_attr align_right animate zoomInLeftLarge" data-anim-type="zoomInLeftLarge" style=" padding:0 5% 0 0;">
                                                    <h2><?php echo $lang['home']['body_section_h2']; ?></h2>
                                                </div>
                                            </div>
                                            <div class="column mcb-column two-third column_tabs animate zoomInRightLarge" data-anim-type="zoomInRightLarge">
                                                <div class="jq-tabs tabs_wrapper tabs_centered">
                                                    <div class="column one-second">
                                                        <p>
                                                        <?php echo $lang['home']['column_one_second_p_one']; ?>
                                                        </p>
                                                    </div>
                                                    <div class="column one-second">
                                                        <!--<p>
                                                            Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.
                                                        </p>-->
                                                        
                                                        <p>
                                                            <?php echo $lang['home']['column_one_second_p_two']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                                
                                            
                                 
                            
                        <div class="section">
                            <div class="section_wrapper clearfix">
                                
                                <div class="section mcb-section" style="padding-top:30px; padding-bottom:50px; background-repeat:no-repeat;">
                                   <div class="column mcb-column one column_column">
                                       <div class="column_attr align_center animate zoomInLeftLarge" data-anim-type="zoomInLeftLarge">
                                           <h2><?php echo $lang['home']['section_wrapper']; ?></h2>
                                              <hr class="hr_narrow hr_color">
                                        </div>
                                   </div>
                                </div>
                                <div class="container--head">
                                    <div id="carousel">
                                        <div class="btn-bar">
                                            <div id="buttons"><a id="prev" href="#"></a><a id="next" href="#"></a></div>
                                        </div>
                                        <div id="slides">
                                            <ul>
                                            <li class="slide" style="width: 100% !important;">
                                                <p class="carousel-caption">
                                                    <div class="desc">
                                                        <?php echo $lang['home']['carousel_caption_desc_one']; ?>
                                                    </div>
                                                    <br/>
                                                    <span class="date"><span><i class="icon-user-line"></i> <a href="testimonial.html">Fernando Carneiro</a></span></span>
                                                </p>
                                            </li>
                                            <li class="slide" style="width: 100% !important;">
                                                <p class="carousel-caption">
                                                    <div class="desc">
                                                        <?php echo $lang['home']['carousel_caption_desc_two']; ?>
                                                    </div>
                                                    <br/>
                                                    <span class="date"><span><i class="icon-user-line"></i> <a href="testimonial.html#testimony-two">Yaron Littan</a></span></span>
                                                </p>
                                            </li>
                                            <li class="slide">
                                                <p class="carousel-caption">
                                                    <div class="desc">
                                                        <?php echo $lang['home']['carousel_caption_desc_three']; ?>
                                                    </div>
                                                    <br/>
                                                    <span class="date"><span><i class="icon-user-line"></i> <a href="testimonial.html#testimony-three">Eduardo Salome</a></span></span>
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="column one">
                                <a style="margin-left: 92% !important;" id="back_to_top" href="#" class="button button_left button_js">
                                    <span class="button_icon">
                                        <i class="icon-up-open-big"></i>
                                    </span>
                                </a>
                            </div>
                            <br><br><br>
                                
                            </div>
                            <div class="section the_content no_content">
                                <div class="section_wrapper">
                                    <div class="the_content_wrapper"></div>
                                </div>
                            </div>
                        
                <!-- Proyectos numerados
    
                            <div class="section mcb-section" style="padding-top:80px; padding-bottom:40px; background-color:#cfc5a2">
                                <div class="section_wrapper mcb-section-inner">
                                    <div class="wrap mcb-wrap one  valign-top clearfix">
                                        <div class="mcb-wrap-inner">
                                            <div class="column mcb-column two-fifth column_column">
                                                <div class="column_attr">
                                                    <h2>IN NUMBERS</h2>
                                                    <p style="color: #817a64;">
                                                        Quent per conubia nostra, per inceptos himenaeos. Mauris in erat justoac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. ed ut imperdiet nis malesuada fames ac turpis velit.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="column mcb-column one-fifth column_quick_fact ">
                                                <div class="quick_fact animate-math">
                                                    <div class="number-wrapper">
                                                        <span class="number" data-to="43">43</span>
                                                    </div>
                                                    <h3 class="title">RONCUC</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                            <div class="column mcb-column one-fifth column_quick_fact ">
                                                <div class="quick_fact animate-math">
                                                    <div class="number-wrapper">
                                                        <span class="number" data-to="118">118</span>
                                                    </div>
                                                    <h3 class="title">NUNC SED</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                            <div class="column mcb-column one-fifth column_quick_fact ">
                                                <div class="quick_fact animate-math">
                                                    <div class="number-wrapper">
                                                        <span class="number" data-to="96">96</span>
                                                    </div>
                                                    <h3 class="title">SAPIEN</h3>
                                                    <hr class="hr_narrow" />
                                                    <div class="desc"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                
                
                                    -->
                
                
                
                            <div class="section the_content no_content">
                                <div class="section_wrapper">
                                    <div class="the_content_wrapper"></div>
                                </div>
                            </div>
                            </div>
                    </div>
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
    <!--<script src="js/jquery-2.1.4.min.js"></script>-->
    <script src="js/jquery.1.11.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>

    <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <!-- Slider -->
    <script src="https://www.k2host.com.br/scripts/pi.slider.js"></script>
    <script src="https://www.k2host.com.br/scripts/pi.init.slider.js"></script>
    <script src="https://www.k2host.com.br/scripts/pi.init.revolutionSlider.js"></script>
    <script>
        var tpj = jQuery;
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_2");
            } else {
                revapi1 = tpj("#rev_slider_1_2").show().revolution({
                    sliderType: "hero",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 800,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
        /*]]>*/
    </script>

<script>
        $(document).ready(function () {
            //rotation speed and timer
            var speed = 1500;
            
            var run = setInterval(rotate, speed);
            var slides = $('.slide');
            var container = $('#slides ul');
            var elm = container.find(':first-child').prop("tagName");
            var item_width = container.width();
            var previous = 'prev'; //id of previous button
            var next = 'next'; //id of next button
            slides.width(item_width); //set the slides to the correct pixel width
            container.parent().width(item_width);
            container.width(slides.length * item_width); //set the slides container to the correct total width
            container.find(elm + ':first').before(container.find(elm + ':last'));
            resetSlides();
            
            
            //if user clicked on prev button
            
            $('#buttons a').click(function (e) {
                //slide the item
                
                if (container.is(':animated')) {
                    return false;
                }
                if (e.target.id == previous) {
                    container.stop().animate({
                        'left': 0
                    }, 1500, function () {
                        container.find(elm + ':first').before(container.find(elm + ':last'));
                        resetSlides();
                    });
                }
                
                if (e.target.id == next) {
                    container.stop().animate({
                        'left': item_width * -2
                    }, 1500, function () {
                        container.find(elm + ':last').after(container.find(elm + ':first'));
                        resetSlides();
                    });
                }
                
                //cancel the link behavior            
                return false;
                
            });
            
            //if mouse hover, pause the auto rotation, otherwise rotate it    
            container.parent().mouseenter(function () {
                clearInterval(run);
            }).mouseleave(function () {
                run = setInterval(rotate, speed);
            });
            
            
            function resetSlides() {
                //and adjust the container so current is in the frame
                container.css({
                    'left': -1 * item_width
                });
            }
            
        });
        //a simple function to click next link
        //a timer will call this function, and the rotation will begin
        
        function rotate() {
            $('#next').click();
        }
        </script>
        <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
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