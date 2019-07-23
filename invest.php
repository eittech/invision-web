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
            <div id="Subheader" class="polygon" style="padding:240px 0 180px;background-image: url('images/invest_invision_slider.jpg') !important;">
                <div class="container">
                    <div class="column one">
                        <h1 class="title"><?php echo $lang['invest']['h1_title']; ?></h1>
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
                                               <h2 class="title-h3"><?php echo $lang['invest']['column_attr_title_h3']; ?></h2>
											</div>
                                        </div>
                                        <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 20px;" />
                                        </div>
                                        <div class="column mcb-column one-third column_progress_bars ">
                                            <div class="progress_bars">
												<p class="big">
                                                    <?php echo $lang['invest']['div_progress_bars_big']; ?>
                                                </p>
												
                                            </div>
                                        </div>
                                        <br>
										<br>
										<br>
										<div class="column mcb-column one-third column_column">
											<div class="column_attr one column_image ">
                                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                                <div class="image_wrapper"><img class="scale-with-grid" src="images/invest_invision_garantias_<?php if($_GET['lang'] == ""){ echo "pt"; }else{echo $_GET['lang'];} ?>.png" alt="" width="700" height="935" />
                                                </div>
                                            </div>
                                       		</div>
                                        </div>
											<div class="column_attr" style=" padding:0 0 0 5%;">
                                                <h4><?php echo $lang['invest']['div_column_attr_h4']; ?></h4>
                                                <div style="display: inline-block; width: 80px; height: 3px; background: #a0915f; margin-bottom: 15px;"></div>
                                                <p class="big">
                                                    <?php echo $lang['invest']['div_column_attr_p_big_one']; ?>
                                                </p>
                                                <p>
                                                    <?php echo $lang['invest']['div_column_attr_p_big_two']; ?>
                                                </p>
												<p class="big">
                                                    <?php echo $lang['invest']['div_column_attr_p_big_three']; ?>
                                                </p>
												<p class="big">
                                                    <?php echo $lang['invest']['div_column_attr_p_big_four']; ?>
                                                </p>
												<p class="big">
                                                    <?php echo $lang['invest']['div_column_attr_p_big_five']; ?>
                                                </p>
												<p class="big">
                                                    <?php echo $lang['invest']['div_column_attr_p_big_six']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
								
							 <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">

										
										
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section equal-height full-width " style="padding-top:0px; padding-bottom:0px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix" style="padding:0 1%">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-fifth column_column">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:10px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one-second column_column">
                                            <div class="column_attr align_right" style=" padding:0 2% 0 10%;">
                                            <h3><?php echo $lang['invest']['div_column_attr_content_one']; ?></h3>
											<br>
                                                <hr class="hr_color">
                                                <p class="big">
                                                    <?php echo $lang['invest']['div_p_big_one']; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one-second column_column">
 											<div class="column_attr" style=" padding:0 2% 0 10%;">
                                                <h3><?php echo $lang['invest']['div_column_attr_content_two']; ?></h3>
												<br>
												<hr class="hr_color">
                                                <p class="big">
                                                    <?php echo $lang['invest']['div_p_big_two']; ?>
                                                </p>
											</div>
										</div>
                                        	</div>
                                   		 		</div>
                                					</div>
                           								</div>
                        							</div>
												</div>
											
                        
                                <div class="hr_wide ">
                                <hr>
                                </div> 
                                <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
								<div class="column mcb-column one column_column">
									  	 <div class="column_attr align_center">
                                               <?php echo $lang['invest']['div_column_attr_h2']; ?>
                                              <hr class="hr_narrow hr_color">
									  	 </div>
								</div>
									<div class="section mcb-section" style="padding-top:80px; padding-bottom:80px; ">
										<div class="section_wrapper mcb-section-inner">
										<div class="wrap mcb-wrap one-second  column-margin-0px valign-top clearfix" style="padding:0 2% 0 0">
											<div class="mcb-wrap-inner">
												<div class="column mcb-column one column_image ">
													<div class="image_frame image_item no_link scale-with-grid aligncenter has_border">
														<div class="image_wrapper"><img class="scale-with-grid" src="images/invest_invision.jpg" alt="" width="700" height="500"> </div>
													</div>
												</div>
											</div>
										</div>
										<div class="wrap mcb-wrap one-second  column-margin-20px valign-top clearfix" style="padding:20px 0 0 2%">
											<div class="mcb-wrap-inner">
												<div class="column mcb-column one column_column">
													<div class="column_attr">
                                                <p class="progress_bars">
                                                    <?php echo $lang['invest']['div_p_progress_bars']; ?>
                                                </p>
                                            		</div>
												</div>
											</div>
										   </div>
										</div>
									</div>
								</div>
								<div class="column mcb-column one column_column">
									<div class="column_attr align_center">
                                      <h2 class="title-h2"><?php echo $lang['invest']['div_h2_title_h2']; ?></h2>
                                    </div>
                                </div>
									<div class="section mcb-section equal-height full-width " style="padding-top:0px; padding-bottom:0px; ">
										<div class="section_wrapper mcb-section-inner">
										  <div class="wrap mcb-wrap one  valign-top clearfix" style="padding:0 1%">
											<div class="mcb-wrap-inner">
											
											<div class="column mcb-column one-fifth column_column">
												<div class="column_attr align_center" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                               <hr class="no_line" style="margin: 0 auto 10px;" />
                                                <p style="color: #5e5e5e;">
                                                   <a href="#"><?php echo $lang['invest']['tabs_p_one']; ?></a>
                                                </p>
												
												
												<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/Invest_invision_investments_1.png" alt="" width="700" height="467" /> </div>
                                                </div>
                                                    
                                                <hr class="no_line" style="margin: 0 auto 10px;" />
                                                    <p>
                                                        <?php echo $lang['invest']['hr_no_line_p_one']; ?>
                                                    </p>
                                                </div>
                                        	</div>
												
												
												
											<div class="column mcb-column one-fifth column_column">
												<div class="column_attr align_center" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                               <hr class="no_line" style="margin: 0 auto 10px;" />
                                                <p style="color: #5e5e5e;">
                                                   <a href="#"><?php echo $lang['invest']['tabs_p_two']; ?></a>
                                                </p>
												
												
												<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/Invest_invision_investments_2.png" alt="" width="700" height="467" /> </div>
                                                </div>
                                                    
                                                <hr class="no_line" style="margin: 0 auto 10px;" />
                                                    <p>
                                                        <?php echo $lang['invest']['hr_no_line_p_two']; ?>
                                                    </p>
                                                </div>
                                        	</div>
												
												
											<div class="column mcb-column one-fifth column_column">
												<div class="column_attr align_center" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                               <hr class="no_line" style="margin: 0 auto 10px;" />
                                                <p style="color: #5e5e5e;">
                                                   <a href="#"><?php echo $lang['invest']['tabs_p_three']; ?><br><br></a>
                                                 </p>
												
												
												<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/Invest_invision_investments_3.png" alt="" width="700" height="467" /> </div>
                                                </div>
                                                   
                                                <hr class="no_line" style="margin: 0 auto 10px;" />
                                                     <p>
                                                        <?php echo $lang['invest']['hr_no_line_p_three']; ?>
                                                    </p>
                                                </div>
                                        	</div>
												
											<div class="column mcb-column one-fifth column_column">
												<div class="column_attr align_center" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                               <hr class="no_line" style="margin: 0 auto 10px;" />
                                                <p style="color: #5e5e5e;">
                                                   <a href="#"><?php echo $lang['invest']['tabs_p_four']; ?><br><br></a>
                                                </p>
												
												
												<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/Invest_invision_investments_4.png" alt="" width="700" height="467" /> </div>
                                                </div>
                                                   
                                                <hr class="no_line" style="margin: 0 auto 10px;" />
                                                <p>
                                                    <?php echo $lang['invest']['hr_no_line_p_four']; ?>
                                                </p>    
                                                </div>
                                        	</div>
											<div class="column mcb-column one-fifth column_column">
												<div class="column_attr align_center" style=" background-color:#f4f4f4; padding:40px 30px 20px;">
                                               <hr class="no_line" style="margin: 0 auto 10px;" />
                                                <p style="color: #5e5e5e;">
                                                   <a href="#"><?php echo $lang['invest']['tabs_p_six']; ?></a>
                                                </p>
												
												
												<div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                                    <div class="image_wrapper"><img class="scale-with-grid" src="images/Invest_invision_investments_6.png" alt="" width="700" height="467" /> </div>
                                                </div>
                                                <hr class="no_line" style="margin: 0 auto 10px;" />
                                                </div>
                                        	</div>
										</div>
	                                </div>
    	                        </div>
        	                </div>
								 <div class="column mcb-column one column_column">
									 <div class="column_attr align_center">
							 			<h3><?php echo $lang['invest']['h3_title_down']; ?></h3>
								 	</div>
							 	</div>
                                <div class="column mcb-column one column_divider ">
                                            <hr class="no_line" style="margin: 0 auto 20px;" />
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
