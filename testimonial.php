

<?php
   // Cargamos el archivo de fijación de idioma
   include "lang.php";
   // Obtiene el nombre de la página actual
   include "check_url.php";
   // Cargamos archivo de configuraciones globales
   include "config.php";
   ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 ">
<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9">
<![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10">
<![endif]-->
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
        <style>
            @media (max-width: 480px) {
            .bq_wrapper {
            background: rgba(0, 0, 0, .02);
            border-left-width: 1px;
            border-style: solid;
            padding: 20px;
            display: none !important;
            }
            button {
            width: 100% !important;
            font-size: 11px !important;
            padding: 3px 2px 8px !important;
            }
            div.desc_wrapper{
            width: 145% !important;
            }
            }
        </style>
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">
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
            <div id="Subheader" class="polygon" style="padding:240px 0 180px;background-image: url('images/testimonial_invision_slider.jpg') !important;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?php echo $lang['testimonial']['header_title']; ?></h1>
                    </div>
                </div>
            </div>
            </div>
            <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <!-- One full width row-->
                    <div class="column one column_our_team_list">
                        <!-- Team Member Area -->
                        <div class="team team_list clearfix">
                        <!-- One Fourth (1/4) Column -->
                        <div class="column one-fourth">
                            <div class="image_frame no_link scale-with-grid">
                                <div class="image_wrapper">
                                    <a href="https://www.youtube.com/watch?v=j2PYYTJrcHE&feature=youtu.be" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                    <div class="mask"></div>
                                    <img src="images/testimonial_invision_1.jpg" class="attachment-thumbnail" alt="Jason Collins">
                                    </a>
                                </div>
                            </div>
                            <a href="https://www.youtube.com/watch?v=j2PYYTJrcHE&feature=youtu.be" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                            <button type="button"><?php echo $lang['testimonial']['button']; ?></button>
                            </a>
                        </div>
                        <!-- One Second (1/2) Column -->
                        <div class="column one-second">
                            <div class="desc_wrapper">
                                <h4>Fernando Carneiro</h4>
                                <p class="subtitle" hidden>
                                    CEO
                                </p>
                                <hr class="hr_color">
                                <div class="desc">
                                    <?php echo $lang['testimonial']['test_one_content_column_one']; ?>
                                </div>
                            </div>
                        </div>
                        <!-- One Fourth (1/4) Column -->
                        <div class="column one-fourth">
                            <div class="bq_wrapper">
                                <blockquote>
                                    "<?php echo $lang['testimonial']['blockquote_one']; ?>"
                                </blockquote>
                            </div>
                        </div>
                        </div>
                        <!-- Page devider -->
                        <!-- One full width row-->
                        <div class="column one column_divider">
                        <div class="hr_dots flv_margin_40">
                            <span></span><span></span><span></span>
                        </div>
                        </div>
                        <!-- One full width row-->
                        <div class="column one column_our_team_list">
                        <!-- Team Member Area -->
                        <div class="team team_list clearfix">
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth">
                                <div class="image_frame no_link scale-with-grid">
                                    <div class="image_wrapper">
                                    <a href="https://www.youtube.com/watch?v=H112pFwk5Ac&feature=youtu.be" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                        <div class="mask"></div>
                                        <img src="images/testimonial_invision_2.jpg" class="attachment-thumbnail" alt="Jason Collins">
                                    </a>
                                    </div>
                                </div>
                                <a href="https://www.youtube.com/watch?v=H112pFwk5Ac&feature=youtu.be" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                <button type="button"><?php echo $lang['testimonial']['button']; ?></button>
                                </a>
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <div class="desc_wrapper">
                                    <h4>Yaron Littan</h4>
                                    <p class="subtitle" hidden>
                                    CEO da Ituran
                                    </p>
                                    <hr class="hr_color">
                                    <div class="desc">
                                    <p>
                                        <span class="big">
                                            <?php echo $lang['testimonial']['test_two_content_column_two']; ?>
                                        </span>
                                    </p>
                                    <?php echo $lang['testimonial']['test_two_content_column_three']; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth">
                                <div class="bq_wrapper">
                                    <blockquote>
                                    "<?php echo $lang['testimonial']['blockquote_two']; ?>"
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Page devider -->
                        <!-- One full width row-->
                        <div class="column one column_divider">
                        <div class="hr_dots flv_margin_40">
                            <span></span><span></span><span></span>
                        </div>
                        </div>
                        <!-- One full width row-->
                        <div class="column one column_our_team_list">
                        <!-- Team Member Area -->
                        <div class="team team_list clearfix">
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth">
                                <div class="image_frame no_link scale-with-grid">
                                    <div class="image_wrapper">
                                    <a href="#" >
                                        <div class="mask"></div>
                                        <img src="images/testimonial_invision_3.jpg" class="attachment-thumbnail" alt="Jason Collins">
                                    </a>
                                    </div>
                                </div>
                                <!--  <a href="#" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                    <button type="button">Veja testemunho</button>
                                    </a>-->
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second">
                                <div class="desc_wrapper">
                                    <h4>Eduardo Salome</h4>
                                    <p class="subtitle" hidden>CEO Black Book Capital LLC
                                    </p>
                                    <hr class="hr_color">
                                    <div class="desc">
                                    <p>
                                        <span class="big">
                                            <?php echo $lang['testimonial']['test_three_content_column_two']; ?>
                                        </span>
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <!-- One Fourth (1/4) Column -->
                            <div class="column one-fourth">
                                <div class="bq_wrapper">
                                    <blockquote>
                                        "<?php echo $lang['testimonial']['blockquote_three']; ?>"
                                    </blockquote>
                                </div>
                            </div>
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
        <script src="js/jquery-2.1.4.min.js"></script>
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