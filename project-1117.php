<?php
// Cargamos el archivo de fijación de idioma
include "lang.php";
// Obtiene el nombre de la página actual
include "check_url.php";
// Cargamos archivo de configuraciones globales
include "config.php";
?>
<!DOCTYPE html>
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
      <link rel='stylesheet' href='css/interior.css'>
      <link rel='stylesheet' href='css/custom.css'>
   </head>
   <body class="home page template-slider color-custom style-simple layout-full-width nice-scroll-on mobile-tb-left button-stroke no-content-padding header-transparent header-fw minimalist-header-no sticky-header sticky-dark ab-hide subheader-both-center menuo-right menuo-no-borders footer-sliding footer-copy-center">
      <div id="Wrapper">
      <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
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
         <div id="Subheader" style="padding:240px 0 180px;">
            <div class="container">
               <div class="column one">
                  <h1 class="title">project</h1>
               </div>
            </div>
         </div>
      </div>
      <div id="Content">
      <div class="content_wrapper clearfix">
      <div class="sections_group">
      <div class="entry-content">
      <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; ">
      <div class="portfolio type-portfolio has-post-thumbnail ">
      <div class="section section-portfolio-header">
      <!--<div class="section_wrapper clearfix">
         <div class="column mcb-column one post-header">
               <div class="column_attr align_center">
               <br>
         <br>
         <br>
         <br>
         <h1>1117 NE 18th</h1>
               </div>
                  </div>
               </div>-->
      <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
      <!-- Accordion Area -->
      <div class="section" id="accordion flv_sections_16">
      <div class="section_wrapper clearfix">
      <div class="items_group clearfix">
         <!-- One Second (1/2) Column -->
         <!--<div class="column one-second column_column">
            <div class="column_attr clearfix title-project">
                  <h4>1117 NE 18th</h4>
                  <div class="post-meta clearfix">
                  <div class="author-date">
                     <span class="author">Fort Lauderdale<i>
                  </div>
            </div>
            </div>
            </div>-->
         <div class="column_attr align_center">
            <h2>1117 NE 18th St</h2>
            <h4>Fort Lauderdale</h4>
         </div>
      </div>
      <br>
      <!--<div class="column_attr">
         <div class="flv_style_11">
            <h4>LOCALIZAÇÃO E ENQUADRAMENTO TERRENO</h4>
         </div>
         </div>
         <div class="section mcb-section" style="padding-top:40px; padding-bottom:50px; background-repeat:no-repeat;">
         <div class="column one column_image">
            <div>
               <img class="scale-with-grid" src="images/lotes-invision-1117.png" alt="">
            </div>
         </div>
         </div>-->
      <div class="section mcb-section" style="padding-top:60px; padding-bottom:50px; background-repeat:no-repeat;">
         <!-- One Second (1/2) Column -->
         <div class="column one column_column">
            <div class="column_attr ">
               <h4><?php echo $lang['project_1117']['div_h4_one']; ?></h4>
            </div>
         </div>
         <!-- One Second (1/2) Column -->
         <div class="column one-second column_column">
            <div class="column_attr ">
               <?php echo $lang['project_1117']['div_p_big_one']; ?>
            </div>
         </div>
         <!-- One Third (1/2) Column -->
         <div class="column one-second column_our_team">
            <!-- Team Member Area -->
            <div class="team team_vertical">
               <div class="image_frame no_link scale-with-grid">
                  <div class="image_wrapper"><img class="scale-with-grid" src="images/lotes-invision-1117.png" alt="Alçado Posterior">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="hr_wide">
         <hr>
      </div>
      <div class="section mcb-section" style="padding-top:15px; padding-bottom:50px; background-repeat:no-repeat;">
         <div class="column one column_image">
            <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px; background-repeat:no-repeat;"></div>
            <div class="image_wrapper"><img class="scale-with-grid" src="images/p1117_5.1.jpg" alt="">
            </div>
         </div>
         <div class="column one-second column_column">
            <div class="column_attr ">
               <?php echo $lang['project_1117']['div_p_big_two']; ?>
            </div>
         </div>
         <div class="column one-second column_column">
            <div class="column_attr ">
               <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                  <dl class="gallery-item">
                     <dt class="gallery-icon landscape">
                        <div class="image_frame scale-with-grid">
                           <div class="image_wrapper">
                              <a href="images/p1117_1.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                 <div class="mask"></div>
                                 <img src="images/p1117_1.1.jpg" class="attachment-thumbnail" alt="pd_1.jpg" style="height: auto; width: 100%;" width="300" height="300">
                              </a>
                           </div>
                        </div>
                     </dt>
                     <dd></dd>
                  </dl>
                  <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                     <dl class="gallery-item">
                        <dt class="gallery-icon landscape">
                           <div class="image_frame scale-with-grid">
                              <div class="image_wrapper">
                                 <a href="images/p1117_2.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                    <div class="mask"></div>
                                    <img src="images/p1117_2.jpg" class="attachment-thumbnail" alt="pd_2.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                 </a>
                              </div>
                           </div>
                        </dt>
                        <dd></dd>
                     </dl>
                     <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                        <dl class="gallery-item">
                           <dt class="gallery-icon landscape">
                              <div class="image_frame scale-with-grid">
                                 <div class="image_wrapper">
                                    <a href="images/p1117_3.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                       <div class="mask"></div>
                                       <img src="images/p1117_3.jpg" class="attachment-thumbnail" alt="pd_3.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                    </a>
                                 </div>
                              </div>
                           </dt>
                           <dd></dd>
                        </dl>
                        <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                           <dl class="gallery-item">
                              <dt class="gallery-icon landscape">
                                 <div class="image_frame scale-with-grid">
                                    <div class="image_wrapper">
                                       <a href="images/p1117_4.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                          <div class="mask"></div>
                                          <img src="images/p1117_4.jpg" class="attachment-thumbnail" alt="pd_4.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                       </a>
                                    </div>
                                 </div>
                              </dt>
                              <dd></dd>
                           </dl>
                           <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                              <dl class="gallery-item">
                                 <dt class="gallery-icon landscape">
                                    <div class="image_frame scale-with-grid">
                                       <div class="image_wrapper">
                                          <a href="images/p1117_5.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                             <div class="mask"></div>
                                             <img src="images/p1117_5.jpg" class="attachment-thumbnail" alt="pd_5.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                          </a>
                                       </div>
                                    </div>
                                 </dt>
                                 <dd></dd>
                              </dl>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="column one column_column">
            <div class="column_attr ">
               <h4><?php echo $lang['project_1117']['div_title_h4']; ?></h4>
            </div>
         </div>
         <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
            <!-- Accordion Area -->
            <div class="section" id="accordion flv_sections_16">
               <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                     <!-- One Second (1/2) Column -->
                     <!-- One Second (1/2) Column 
                        <div class="column one-second column_column">
                              <div class="column_attr ">
                                 <h5 class="flv_style_4">Toggle</h5>
                              </div>
                              -->
                  </div>
                  <!-- One Second (1/2) Column -->
                  <div class="column one-second column_accordion">
                     <div class="accordion">
                        <div class="mfn-acc accordion_wrapper open1st">
                           <div class="question active">
                              <div class="title">
                                 <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1117']['div_question_title_li_one']; ?>
                              </div>
                              <div class="answer" style="display: block;">
                                    <?php echo $lang['project_1117']['div_answer_one']; ?>
                              </div>
                           </div>
                           <div class="question">
                              <div class="title">
                                 <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1117']['div_question_title_li_two']; ?>
                              </div>
                              <div class="answer">
                                 <p>
                                    <span class="big"><?php echo $lang['project_1117']['div_answer_one_down']; ?></span>
                                 </p>
                              </div>
                           </div>
                           <div class="question">
                              <div class="title">
                                 <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1117']['div_question_title_li_three']; ?>
                              </div>
                              <div class="answer">
                                 <?php echo $lang['project_1117']['div_answer_two']; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- One Second (1/2) Column -->
                  <div class="column one-second column_accordion">
                     <div class="accordion">
                        <div class="mfn-acc accordion_wrapper open1st toggle">
                           <div class="question">
                              <div class="title">
                                 <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1117']['div_question_title_li_four']; ?>
                              </div>
                              <div class="answer" style="display: none;">
                                    <?php echo $lang['project_1117']['div_answer_three']; ?>
                              </div>
                           </div>
                           <div class="question">
                              <div class="title">
                                 <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1117']['div_question_title_li_five']; ?>
                              </div>
                              <div class="answer" style="display: none;">
                                 <p>
                                    <span class="big"><?php echo $lang['project_1117']['div_answer_four']; ?></span>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="column_attr">
            <div class="flv_style_11">
               <h4 style="margin-left: 0% !important"><?php echo $lang['project_1117']['flv_style_11_one']; ?></h4>
            </div>
         </div>
         <div class="section mcb-section" style="padding-top:40px; padding-bottom:50px; background-repeat:no-repeat;">
            <!-- One Third (1/3) Column -->
            <div class="column one-third column_our_team">
               <!-- Team Member Area -->
               <div class="team team_vertical">
                  <div class="image_frame no_link scale-with-grid">
                     <div class="image_wrapper"><img class="scale-with-grid" src="images/project_details_1117_frontal.jpg" alt="Alçado Frontal">
                     </div>
                  </div>
                  <div class="desc_wrapper">
                     <p class="big"><?php echo $lang['project_1117']['flv_style_11_p_big_one']; ?></p>
                  </div>
               </div>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third column_our_team">
               <!-- Team Member Area -->
               <div class="team team_vertical">
                  <div class="image_frame no_link scale-with-grid">
                     <div class="image_wrapper"><img class="scale-with-grid" src="images/project_details_1117_posterior.jpg" alt="Alçado Posterior">
                     </div>
                  </div>
                  <div class="desc_wrapper">
                     <p class="big"><?php echo $lang['project_1117']['flv_style_11_p_big_two']; ?></p>
                  </div>
               </div>
            </div>
            <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
            </div>
         </div>
         <br><br>
         <div class="column_attr">
            <div class="flv_style_11">
               <h4 style="margin-left: 0% !important"><?php echo $lang['project_1117']['flv_style_11_two']; ?></h4>
            </div>
         </div>
         <br>
         <div class="section sections_style_0 ">
            <div class="section_wrapper clearfix">
               <div class="items_group clearfix">
                  <!-- Team Member Area -->
                  <div class="column one-third column_our_team">
                     <!-- Team Member Area -->
                     <div class="team team_vertical">
                        <div class="image_frame no_link scale-with-grid">
                           <div class="image_wrapper"><img class="scale-with-grid" src="images/project_details_1117_piso2.jpg" alt="Alçado Frontal">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- One Third (1/3) Column -->
                  <div class="column one-third column_our_team">
                     <!-- Team Member Area -->
                     <div class="team team_vertical">
                        <div class="image_frame no_link scale-with-grid">
                           <div class="image_wrapper"><img class="scale-with-grid" src="images/project_details_1117_piso1.jpg" alt="Alçado Posterior">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--<div class="column one column_image">
                     <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px; background-repeat:no-repeat;"></div>
                     <div class="image_wrapper"><img class="scale-with-grid" src="images/p1117_5.1.jpg" alt="">
                     </div>
                     </div>
                     <div class="column one-second column_column">
                     <div class="column_attr ">
                        <p class="big">
                           Duas Unidades DUPLEX HOUSES, implantadas num terreno com 10,000 sqft, localizado na 18th Court em Fort Lauderdale, Flórida.
                        </p>
                        <p>
                           Cada Unidade tem um total de área climatizada de 2.500 sqft e de 800 sqft de área coberta.
                           Compostas por Hall de Entrada, Sala com Cozinha integrada, wc social, 3 Suites e Garagem para duas viaturas. Na área exterior de cada Unidade, localiza-se uma Piscina com Zona de Solário, Varanda, Acessos e uma Área Ajardinada.
                        </p>
                     </div>
                     </div>
                     <div class="column one-second column_column">
                     <div class="column_attr ">
                        
                        <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                           
                           <dl class="gallery-item">
                              <dt class="gallery-icon landscape">
                                 <div class="image_frame scale-with-grid">
                                    <div class="image_wrapper">
                                       <a href="images/p1117_1.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                          <div class="mask"></div>
                                          <img src="images/p1117_1.jpg" class="attachment-thumbnail" alt="pd_1.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                       </a>
                                    </div>
                                 </div>
                              </dt>
                              <dd></dd>
                           </dl>
                           
                           <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                              
                              <dl class="gallery-item">
                                 <dt class="gallery-icon landscape">
                                    <div class="image_frame scale-with-grid">
                                       <div class="image_wrapper">
                                          <a href="images/p1117_2.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                             <div class="mask"></div>
                                             <img src="images/p1117_2.jpg" class="attachment-thumbnail" alt="pd_2.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                          </a>
                                       </div>
                                    </div>
                                 </dt>
                                 <dd></dd>
                              </dl>
                              
                              <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                 
                                 <dl class="gallery-item">
                                    <dt class="gallery-icon landscape">
                                       <div class="image_frame scale-with-grid">
                                          <div class="image_wrapper">
                                             <a href="images/p1117_3.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                <div class="mask"></div>
                                                <img src="images/p1117_3.jpg" class="attachment-thumbnail" alt="pd_3.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                             </a>
                                          </div>
                                       </div>
                                    </dt>
                                    <dd></dd>
                                 </dl>
                                 
                                 <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                    
                                    <dl class="gallery-item">
                                       <dt class="gallery-icon landscape">
                                          <div class="image_frame scale-with-grid">
                                             <div class="image_wrapper">
                                                <a href="images/p1117_4.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                   <div class="mask"></div>
                                                   <img src="images/p1117_4.jpg" class="attachment-thumbnail" alt="pd_4.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                                </a>
                                             </div>
                                          </div>
                                       </dt>
                                       <dd></dd>
                                    </dl>
                                    
                                    <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                       
                                       <dl class="gallery-item">
                                          <dt class="gallery-icon landscape">
                                             <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                   <a href="images/p1117_5.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                      <div class="mask"></div>
                                                      <img src="images/p1117_5.jpg" class="attachment-thumbnail" alt="pd_5.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                                   </a>
                                                </div>
                                             </div>
                                          </dt>
                                          <dd></dd>
                                       </dl>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>-->
                  <div class="section full-width sections_style_0 ">
                     <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                           <!-- One full width row-->
                           <div class="column one column_column">
                              <div class="column_attr ">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="section the_content">
                     <div class="section_wrapper">
                        <div class="the_content_wrapper"></div>
                     </div>
                  </div>
                  <div class="section section-post-footer">
                     <div class="section_wrapper clearfix">
                        <!-- One full width row-->
                        <div class="column one post-pager"></div>
                     </div>
                  </div>
                  <!-- Related posts area-->
                  <div class="section section-post-related">
                     <div class="section_wrapper clearfix"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section mcb-section" style="padding-top:0px; padding-bottom:50px; background-repeat:no-repeat;">
         <!-- One full width row-->
         <div class="column one column_column" style="margin-top: -13% !important;">
            <div class="column_attr ">
               <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
                  <h4><?php echo $lang['project_1117']['section_mcb_section_h4']; ?></h4>
               </div>
            </div>
         </div>
         <div class="section sections_style_0 ">
            <div class="section_wrapper clearfix">
               <div class="items_group clearfix">
                  <!-- One full width row-->
                  <div class="column one column_image">
                     <div ><img class="scale-with-grid" src="images/project_details_1117_topografia.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <hr class="no_line hrmargin_b_30">
         <div class="section flv_sections_4">
            <div class="section_wrapper clearfix">
               <div class="items_group clearfix">
                  <!-- Page Title-->
                  <!-- One full width row-->
                  <div class="column one column_fancy_heading">
                     <div class="fancy_heading fancy_heading_icon">
                        <!-- Animated area -->
                        <div class="animate zoomInLeftLarge" data-anim-type="zoomInLeftLarge">
                           <span class="icon_top"><i class="icon-dot-3"></i></span>
                           <h4 class="title">
                              <a href="project.php">
                              <button type="button"><?php echo $lang['project_1117']['return_button']; ?></button>
                              </a>
                           </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--<footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:0px 0 60px;">
               <div class="container">
                  <div class="column one-fourth">
                     <aside class="widget widget_text">
                        <div class="textwidget">
                           <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                              <div class="image_wrapper"><img class="scale-with-grid" src="images/invision_179x184.png" alt="" width="179" height="184" />
                              </div>
                           </div>
                        </div>
                     </aside>
                  </div>
                  <div class="column one-fourth">
                     <aside class="widget widget_text">
                        <h4>Últimos Investimentos</h4>
                        <div class="textwidget">
                           <ul style="line-height: 32px;">
                           <li>
                              <i style="color: #b2a475;" class="icon-right-dir"></i><a href="#">1725 NE 18th St – Fort Lauderdale</a>
                           </li>
                           <li>
                              <i style="color: #b2a475;" class="icon-right-dir"></i><a href="#">1719 NE 18th St – Fort Lauderdale</a>
                           </li>
                        </div>
                     </aside>
                  </div>
                  <div class="column one-fourth">
                     <aside class="widget widget_text">
                        <h4>Aguardamos o seu Contato</h4>
                        <div class="textwidget">
                           <p>
                              USA +1 954 843 3500
                              <br>Escreva para nós: <a href="#""info@invisionrealestateinvestments.com">info@invisionrealestateinvestments.com</a>
                           </p>
                           <p>
                              <br> 4000 Hollywood Blvd. Suíte 555S
                              Hollywood, Flórida, USA, 33021.
                           </p>
                           <p class="contact_icons">
                              <span>Encontre-nos aqui:</span><a style="font-size: 22px;""target=blank"" "href="https://www.linkedin.com/company/24779107/admin/"></a><a style="font-size: 22px;" href="#"><br><i class="icon-linkedin-circled"></i></a><a style="font-size: 22px;" href="#"></a><a style="font-size: 22px; ""target="_blank"" href="#"><i class="icon-mail"></i></a>
                           </p>
                        </div>
                     </aside>
                  </div>
               </div>
            </div>
            <div class="footer_copy">
               <div class="container">
                  <div class="column one">
                     <div class="copyright">
                        &copy; 2019 Invision Real Estate Investments - Powered by <a target="_blank" rel="nofollow" href="http://eittech.net/">eittech.net</a>
                     </div>
                     <ul class="social"></ul>
                  </div>
               </div>
            </div>
            </footer>-->
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

