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
      @media (max-width: 767px) {
    
        .three-fifth.mcb-wrap {
          width: 60%;
          margin: 194px 0px 0px !important;
          padding: 50px 0px 0px !important;
        }
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
                            </div>
                        </div>
                    </div>
                </div>
				</header>
            <div id="Subheader" class="polygon" style="padding:240px 0 180px;background-image: url('images/project_invision_slider.jpg') !important;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?php echo $lang['project']['header_title']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content">
			<div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                           <div class="column mcb-column two column_column">
                                            <div class="column_attr align_center">
                                               <h2 class="title-h2-project"><?php echo $lang['project']['title_h2_project']; ?></h2>
                                                <hr class="hr_color">
											</div>
                                           </div>
                                           <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 20px;" />
                                           </div>
                                        
                                        </div>
                                     </div>
                                  </div>
                               </div>
                        <!--    seccion -->
                        <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap two-fifth  column-margin-10px valign-middle clearfix" style="padding: 0px 0px 0px 3%; height: 520px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h2 class="title-h2-project-1">1117 NE 18th St</h2>
												<h4>Fort Lauderdale, FL 33305</h4>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                
                                                <br>
                                                <p>
                                                    <?php echo $lang['project']['column_attr_p_one']; ?>
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 40px">
                                                <div style="background: url(images/home_developer3_apartments4.png) no-repeat left top; padding-left: 60px; overflow: hidden; ">
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['sub_title_one']; ?>
                                                        </p>
                                                        <h4>72 Ft</h4>
                                                    </div>
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['sub_title_two']; ?>
                                                        </p>
                                                        <h4>113,68 Ft</h4>
                                                    </div>
                                                    <hr class="no_line" style="margin:0 auto 1px">
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['sub_title_three']; ?>
                                                        </p>
                                                        <h4>108 Ft</h4>
                                                    </div>
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['sub_title_four']; ?>
                                                        </p>
                                                        <h4>113 Ft</h4>
                                                    </div>
                                                </div>
                                                <hr class="no_line" style="margin:0 auto 40px">
                                                <div class="column one-second">
                                                    <div style="background: #f3f2f2; padding: 20px 40px; display: inline-block; font-size: 13px; color: #ababab; font-weight: 800;">
                                                        <?php echo $lang['project']['div_column_one']; ?> <span style="font-size: 15px;" class="themecolor">10.000 sqft</span>
                                                    </div>
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second column_column">
                                                    <div class="column_attr ">
                                                        <div class="aligncenter">
                                                            <a href="project-1117.php" data-hover="<?php echo $lang['project']['button']; ?>">
                                                                <button type="button"><?php echo $lang['project']['button']; ?></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap three-fifth valign-middle clearfix" style="padding: 0px 3% 0px 5%; height: 520px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="images/project_1117.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							  <div class="section mcb-section" style="padding-top:80px; padding-bottom:40px; ">
                                <div class="section_wrapper mcb-section-inner">
                                    <div class="wrap mcb-wrap one  valign-top clearfix">
                                       <div class="mcb-wrap-inner">
                                           <div class="column mcb-column two column_column">
                                            <div class="column_attr align_center">
                                               <h2 class="title-h2-project"><?php echo $lang['project']['title_h2_project_two']; ?></h2>
                                                <hr class="hr_color">
											</div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                        <!--    seccion -->
                        <div class="section mcb-section equal-height-wrap" style="padding-top:120px; padding-bottom:80px; background-color:#f3f2f2">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap two-fifth  column-margin-10px valign-middle clearfix" style="padding:0 0 0 3%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h5><?php echo $lang['project']['column_attr_h5_one']; ?></h5>
                                                <h2>1719 NE 18th St</h2>
												<h4>Fort Lauderdale</h4>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <p>
                                                    <?php echo $lang['project']['div_p_one']; ?>
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 40px">
                                                <div style="background: url(images/home_developer3_apartments4.png) no-repeat left top; padding-left: 60px; overflow: hidden">
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['projeto_1719_sub_title_one']; ?>
                                                        </p>
                                                        <h4>2.485 sqft</h4>
                                                    </div>
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['projeto_1719_sub_title_two']; ?>
                                                        </p>
                                                        <h4>6.300 sqft</h4>
                                                    </div>
                                                    <hr class="no_line" style="margin:0 auto 1px">
                                                    <div class="column one-second">
                                                        <?php echo $lang['project']['projeto_1719_precio']; ?>
                                                    </div>
                                                </div>
                                                <hr class="no_line" style="margin:0 auto 40px">
                                                <div class="column one-second">
                                                    <div style="background: #fff; padding: 20px 40px; display: inline-block; font-size: 13px; color: #ababab; font-weight: 800;">
                                                        <?php echo $lang['project']['projeto_1719_sub_title_three']; ?> <span style="font-size: 15px;" class="themecolor">975.000$</span>
                                                    </div>
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second column_column">
                                                    <div class="column_attr ">
                                                        <div class="aligncenter">
                                                            <a href="project-1719.php" data-hover="<?php echo $lang['project']['button']; ?>">
                                                                <button type="button"><?php echo $lang['project']['button']; ?></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap three-fifth valign-middle clearfix" style="padding:0 3% 0 5%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="images/project_1719.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section equal-height-wrap" style="padding-top:120px; padding-bottom:80px;">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap two-fifth  column-margin-10px valign-middle clearfix" style="padding:0 0 0 3%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                               <h5><?php echo $lang['project']['h5_attr_title_1']; ?></h5>
                                                <h2>1725 NE 18th St</h2>
												<h4>Fort Lauderdale</h4>
                                                <hr class="no_line" style="margin:0 auto 20px">
                                                <p>
                                                    <?php echo $lang['project']['projeto_1725_sub_title_three']; ?>
                                                </p>
                                                <hr class="no_line" style="margin:0 auto 40px">
                                                <div style="background: url(images/home_developer3_apartments4.png) no-repeat left top; padding-left: 60px; overflow: hidden; ">
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['projeto_1725_sub_title_one']; ?>
                                                        </p>
                                                        <h4>2.485 sqft</h4>
                                                    </div>
                                                    <div class="column one-second">
                                                        <p style="font-weight:800;margin-bottom:5px">
                                                            <?php echo $lang['project']['projeto_1725_sub_title_two']; ?>
                                                        </p>
                                                        <h4>6.300 sqft</h4>
                                                    </div>
                                                    <hr class="no_line" style="margin:0 auto 1px">
                                                    <div class="column one-second">
                                                        <?php echo $lang['project']['projeto_1725_precio']; ?>
                                                    </div>
                                                </div>
                                                <hr class="no_line" style="margin:0 auto 40px">
                                                <div class="column one-second">
                                                    <div style="background: #f3f2f2; padding: 20px 40px; display: inline-block; font-size: 13px; color: #ababab; font-weight: 800;">
                                                    <?php echo $lang['project']['projeto_1725_sub_title_four']; ?> <span style="font-size: 15px;" class="themecolor">880.000$</span>
                                                    </div>
                                                </div>
                                                <!-- One Second (1/2) Column -->
                                                <div class="column one-second column_column">
                                                    <div class="column_attr ">
                                                        <div class="aligncenter">
                                                            <a href="project-1725.php" data-hover="<?php echo $lang['project']['button']; ?>">
                                                                <button type="button"><?php echo $lang['project']['button']; ?></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap three-fifth valign-middle clearfix" style="padding:0 3% 0 5%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper">
                                                    <img class="scale-with-grid" src="images/project_1725.jpg">
                                                </div>
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
        <!-- Apertura Footer -->
        <?php include "footer.php"; ?>
        <!-- Cierre Footer -->
    </div>

    <!-- JS -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/ui/jquery-ui.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/scripts.js"></script>

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