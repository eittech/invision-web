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
    <style type="text/css">
    body,td,th {
    font-family: "Titillium Web", sans-serif;
}
a {
    font-family: "Titillium Web", sans-serif;
}
h1,h2,h3,h4,h5,h6 {
    font-family: "Titillium Web", sans-serif;
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
            <div id="Subheader" class="polygon" style="padding:240px 0 180px;background-image: url('images/aboutus_invision_slider.jpg') !important;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?php echo $lang['about']['h1_title']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Division polygon diagonal -->
		<!--<div>
			<div class="polygon">
				<div class="content"></div>
			</div>
		</div>-->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section" style="padding-top:80px; padding-bottom:40px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr align_center">
                                                <h2><?php echo $lang['about']['h1_wrap_inner_title']; ?></h2>
                                               
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 20px;" />
                                        </div>
                                        <div class="column mcb-column one-third column_progress_bars ">
                                            <div class="progress_bars">
												 <h3><?php echo $lang['about']['column_column_one']; ?></h3>
                                                <p>
                                                    <?php echo $lang['about']['p_one']; ?>
                                                </p>
												
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_column">
                                            <div class="column_attr" style=" padding:0 0 0 5%;">
                                                <h3><?php echo $lang['about']['column_column_two']; ?></h3>
                                                <p>
                                                    <?php echo $lang['about']['p_two']; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-third column_column">
                                            <div class="column_attr" style=" padding:0 0 0 5%;">
                                                <h3><?php echo $lang['about']['column_column_three']; ?></h3>
                                                <p>
                                                    <?php echo $lang['about']['p_three']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One Third (1/3) Column -->
                                <div class="column one-third column_icon_box">
                                </div>
                                <!-- One Third (1/3) Column -->
                                <div class="column one-third column_icon_box">
                                </div>
                                <!-- One Third (1/3) Column -->
                                <div class="column one-third column_icon_box">
                                    <!-- Animated area -->
                                    <div class="animate fadeInRightLarge" data-anim-type="fadeInRightLarge">
                                        <div class="icon_box icon_position_top no_border">
                                            <div class="desc_wrapper">
                                                <a target="_blank" href="presentation/invision_presentation_en.pdf" title="Presentation (EN)">
                                                    <img src="images/icons/pdf.png" class="imgSVG mCS_img_loaded" alt="imagen SVG" title="pdf" style="width: 20px !important;height: 20px !important;">
                                                    &nbsp;Presentation (EN)
                                                </a>

                                                <a target="_blank" href="presentation/invision_presentation_es.pdf" title="Presentacion (ES)">
                                                    <img src="images/icons/pdf.png" class="imgSVG mCS_img_loaded" alt="imagen SVG" title="pdf" style="width: 20px !important;height: 20px !important;">
                                                    &nbsp;Presentacion (ES)
                                                </a>

                                                <a target="_blank" href="presentation/invision_presentation_pt.pdf" >
                                                    <img src="images/icons/pdf.png" class="imgSVG mCS_img_loaded" alt="imagen SVG" title="pdf" style="width: 20px !important;height: 20px !important;">
                                                    &nbsp;Apresentação (PT)
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section full-width no-margin-h no-margin-v  " style="padding-top:0px; padding-bottom:0px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">												
												<div class="image_wrapper" ><img class="scale-with-grid polygon-two" src="images/aboutus_invision_sustainability.jpg" alt="" width="1920" height="630" />
												</div>
											</div>
                                      </div>
                                  </div>
                                </div>
				            </div>
                        </div>
                         
                            <div class="section mcb-section equal-height-wrap" style="padding-top:50px;">
                                 <div class="section_wrapper mcb-section-inner">
                            <div class="column mcb-column one column_column">
                              <div class="column_attr align_center">
                                   <h2><?php echo $lang['about']['column_attr_h2']; ?></h2>
                                   <hr class="hr_narrow hr_color">
                              </div>
                                <br>
                                <br>
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column">
                                        <div class="column_attr">
										        <h4><?php echo $lang['about']['column_attr_h4_one']; ?></h4>
												<div style="display: inline-block; width: 80px; height: 3px; background: #a0915f; margin-bottom: 15px;"></div>
                                                <p class="big">
                                                    <?php echo $lang['about']['column_attr_p_big_one']; ?>
                                                </p>
												<h4><?php echo $lang['about']['column_attr_h4_two']; ?></h4>
												<div style="display: inline-block; width: 80px; height: 3px; background: #a0915f; margin-bottom: 15px;"></div>
												<p class="big">
                                                    <?php echo $lang['about']['column_attr_p_big_two']; ?>
                                                </p>
									  </div>
                                    </div>
                                        
                                    <!-- One Second (1/2) Column -->
                                    <div class="column one-second column_column">
                                        <div class="column_attr ">
												<h4><?php echo $lang['about']['column_attr_h4_three']; ?></h4>
                                                <div style="display: inline-block; width: 80px; height: 3px; background: #a0915f; margin-bottom: 15px;"></div>
												<p class="big">
                                                    <?php echo $lang['about']['column_attr_p_big_three']; ?>
                                                </p>	 
												<h4><?php echo $lang['about']['column_attr_h4_four']; ?></h4>
												<div style="display: inline-block; width: 80px; height: 3px; background: #a0915f; margin-bottom: 15px;"></div>
												<p class="big">
                                                    <?php echo $lang['about']['column_attr_p_big_four']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                
                              </div>
                          </div>
                    </div>
                    
                    
                     <div class="section mcb-section" style="padding-top:30px; background-repeat:no-repeat;">
                                
                                        <div class="column_attr align_center">
                                            <h2><?php echo $lang['about']['column_attr_h2_two']; ?></h2>
                                            <hr class="hr_narrow hr_color">
                                        <br>
                                        <br>
                                        </div>
                                
                                  <!-- One Third (1/3) Column -->
                         
                                <div class="column one-third column_column">
                                    <div class="column_attr ">
                                        <div class="team team_vertical">
                                            <div class="image_frame no_link scale-with-grid">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/aboutus_team_s.jpg" alt="Siulmary Evelin Ovalles M.">
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>Siulmary Evelin Ovalles M.</h4>
                                                <p class="subtitle">
                                                    CEO
                                                </p>
                                                <hr class="hr_color">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                         
                                    
                                  <!-- One Third (1/3) Column -->
                                <div class="column one-third column_column">
                                    <div class="column_attr ">
                                        <div class="team team_vertical">
                                            <div class="image_frame no_link scale-with-grid">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/aboutus_team_r.jpg" alt="Renato Lerner">
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>Renato Lerner</h4>
                                                <p class="subtitle">
                                                    Partner
                                                </p>
                                                <hr class="hr_color">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                          <!-- One Third (1/3) Column
                          <div class="column one-third column_column">
                                    <div class="column_attr ">
                                        <div class="team team_vertical">
                                            <div class="image_frame no_link scale-with-grid">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/our_team_1.jpg" alt="Jennifer Lee">
                                                </div>
                                            </div>
                                            <div class="desc_wrapper">
                                                <h4>Jennifer Lee</h4>
                                                <p class="subtitle">
                                                    Software Engineer
                                                </p>
                                                <hr class="hr_color">
                                                <div class="desc">
                                                    Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor.
                                                </div>
                                                <div class="links">
                                                    <a href="mailto:noreply@envato.com" class="icon_bar icon_bar_small"><span class="t"><i class="icon-mail"></i></span><span class="b"><i class="icon-mail"></i></span></a><a target="_blank" href="http://facebook.com/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span></a><a target="_blank" href="http://twitter.com/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span></a><a target="_blank" href="http://www.linkedin.com/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               </div> -->
                         
                    </div>
                    
                        <div class="section the_content no_content">
                            <div class="section_wrapper">
                                <div class="the_content_wrapper"></div>
                            </div>
                        </div>
                <!-- One Third (1/3) Ssiulmaty Ovalles -->
                                    <div class="column one-third column_column">
                                        <div class="column_attr ">
                                            <div class="links">
                                                        <a href="mailto:se@invisionrealestateinvestments.com" class="icon_bar icon_bar_small"><span class="t"><i class="icon-mail"></i></span><span class="b"><i class="icon-mail"></i></span></a><a target="_blank" href="https://www.linkedin.com/in/siulmary-evelin-ovalles-m-567b7b84/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- One Third (1/3) Renato Lerner -->
                                    <div class="column one-third column_column">
                                        <div class="column_attr ">
                                            <div class="links" >
                                                                                                
                                                    <a  target="_blank" href="mailto:rl@invisionrealestateinvestments.com" class="icon_bar icon_bar_small"><span class="t"><i class="icon-mail"></i></span><span class="b"><i class="icon-mail"></i></span></a><a target="_blank" href="https://www.linkedin.com/in/renato-lerner-a6b32915/" class="icon_bar icon_bar_small"><span class="t"><i class="icon-linkedin"></i></span><span class="b"><i class="icon-linkedin"></i></span></a>
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
                                    <!-- One Third (1/3) Column
                                    <div class="column one-third column_column">
                                        <div class="column_attr ">
                                            <h5>1/3</h5> Lorem ipsum dolor sit amet, consectetur adipi scing elit. Vestibulum laoreet mi sit amet. amet sem conse.
                                        </div>
                                    </div> -->
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