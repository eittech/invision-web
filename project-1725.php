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
                                          <a id="logo" href="index.php" title="Invision Real Estate Investments"><img class="logo-main   scale-with-grid" src="images/invision_logo.png" alt="Invision - logo" /><img class="logo-sticky scale-with-grid" src="images/invision_logo_retina.png" alt=""><img class="logo-mobile scale-with-grid" src="images/invision_logo.png" alt=""></a>
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
                              <h1 class="title">NÓS</h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="Content">
                  <div class="sections_group">
                  <div class="entry-content">
                  <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; ">
                     <div class="portfolio type-portfolio has-post-thumbnail ">
                        <div class="section section-portfolio-header">
                           <div class="section_wrapper clearfix">
                              <div class="column mcb-column one post-header">
                                 <div class="column_attr align_center">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="column_attr align_center">
                                        <h2>1725 NE 18th St</h2>
                                        <h4>Fort Lauderdale</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Post Featured Element (image / video / gallery)-->
                        <!-- One full width row-->
                        <div class="column one single-photo-wrapper">
                        </div>
                        <!-- One full width row-->
                     </div>
                  </div>
                  <div class="section sections_style_0 ">
                  <div class="section_wrapper clearfix">
                  <div class="items_group clearfix">
                  <!-- One full width row-->
                  <div class="column one column_image">
                     <div class="image_wrapper"><img class="scale-with-grid" src="images/p1725_presentacion.jpg" alt="">
                     </div>
                  </div>
                  <!-- One Second (1/2) Column -->
                  <div class="column one-second column_column">
                     <div class="column_attr ">
                        <?php echo $lang['project_1725']['content_1']; ?>
                     </div>
                  </div>
                  <!-- One Second (1/2) Column -->
                  <div class="column one-second column_column">
                     <div class="column_attr ">
                        <!-- Gallery item -->
                        <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                           <!-- Gallery item -->
                           <dl class="gallery-item">
                              <dt class="gallery-icon landscape">
                                 <div class="image_frame scale-with-grid">
                                    <div class="image_wrapper">
                                       <a href="images/p1725_1.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                          <div class="mask"></div>
                                          <img src="images/p1725_1.jpg" class="attachment-thumbnail" alt="pd_1.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                       </a>
                                    </div>
                                 </div>
                              </dt>
                              <dd></dd>
                           </dl>
                           <!-- Gallery item -->
                           <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                              <!-- Gallery item -->
                              <dl class="gallery-item">
                                 <dt class="gallery-icon landscape">
                                    <div class="image_frame scale-with-grid">
                                       <div class="image_wrapper">
                                          <a href="images/p1725_2.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                             <div class="mask"></div>
                                             <img src="images/p1725_2.jpg" class="attachment-thumbnail" alt="pd_2.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                          </a>
                                       </div>
                                    </div>
                                 </dt>
                                 <dd></dd>
                              </dl>
                              <!-- Gallery item -->
                              <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                 <!-- Gallery item -->
                                 <dl class="gallery-item">
                                    <dt class="gallery-icon landscape">
                                       <div class="image_frame scale-with-grid">
                                          <div class="image_wrapper">
                                             <a href="images/p1725_3.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                <div class="mask"></div>
                                                <img src="images/p1725_3.jpg" class="attachment-thumbnail" alt="pd_3.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                             </a>
                                          </div>
                                       </div>
                                    </dt>
                                    <dd></dd>
                                 </dl>
                                 <!-- Gallery item -->
                                 <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                    <!-- Gallery item -->
                                    <dl class="gallery-item">
                                       <dt class="gallery-icon landscape">
                                          <div class="image_frame scale-with-grid">
                                             <div class="image_wrapper">
                                                <a href="images/p1725_4.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                   <div class="mask"></div>
                                                   <img src="images/p1725_4.jpg" class="attachment-thumbnail" alt="pd_4.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                                </a>
                                             </div>
                                          </div>
                                       </dt>
                                       <dd></dd>
                                    </dl>
                                    <!-- Gallery item -->
                                    <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                       <!-- Gallery item -->
                                       <dl class="gallery-item">
                                          <dt class="gallery-icon landscape">
                                             <div class="image_frame scale-with-grid">
                                                <div class="image_wrapper">
                                                   <a href="images/p1725_5.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                      <div class="mask"></div>
                                                      <img src="images/p1725_5.jpg" class="attachment-thumbnail" alt="pd_5.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                                   </a>
                                                </div>
                                             </div>
                                          </dt>
                                          <dd></dd>
                                       </dl>
                                       <!-- Gallery item -->
                                       <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                          <!-- Gallery item -->
                                          <dl class="gallery-item">
                                             <dt class="gallery-icon landscape">
                                                <div class="image_frame scale-with-grid">
                                                   <div class="image_wrapper">
                                                      <a href="images/p1725_6.1.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                         <div class="mask"></div>
                                                         <img src="images/p1725_6.jpg" class="attachment-thumbnail" alt="pd_6.jpg" style="height: auto; width: 100%;" width="300" height="300">
                                                      </a>
                                                   </div>
                                                </div>
                                             </dt>
                                             <dd></dd>
                                          </dl>
                                       </div>
                                       <!-- Gallery item -->
                                       <div id="gallery-1" class="gallery galleryid-57 gallery-columns-3 gallery-size-thumbnail">
                                          <!-- Gallery item -->
                                          <dl class="gallery-item">
                                             <dt class="gallery-icon landscape">
                                                <div class="image_frame scale-with-grid">
                                                   <div class="image_wrapper">
                                                      <a href="images/project_1725.jpg" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]">
                                                         <div class="mask"></div>
                                                         <img src="images/project_1725.jpg" class="attachment-thumbnail" alt="pd_6.jpg" style="height: auto; width: 100%;" width="300" height="300">
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

                  <h4 style="margin-left: 0% !important"><?php echo $lang['project_1725']['content_2']; ?></h4>
                        
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_our_team">
                                <!-- Team Member Area -->
                                <div class="team team_vertical">
                                   <div class="image_frame no_link scale-with-grid">
                                      <div class="image_wrapper"><img class="scale-with-grid" src="images/project_1725_alcado_frontal.jpg" alt="Alçado Frontal">
                                      </div>
                                   </div>
                                   <div class="desc_wrapper">
                                      <p class="big"><?php echo $lang['project_1725']['content_3']; ?></p>
                                   </div>
                                </div>
                             </div>
                             <!-- One Third (1/3) Column -->
                             <div class="column one-third column_our_team">
                                <!-- Team Member Area -->
                                <div class="team team_vertical">
                                   <div class="image_frame no_link scale-with-grid">
                                      <div class="image_wrapper"><img class="scale-with-grid" src="images/project_1725_alcado_posterior.jpg" alt="Alçado Posterior">
                                      </div>
                                   </div>
                                   <div class="desc_wrapper">
                                      <p class="big"><?php echo $lang['project_1725']['content_4']; ?></p>
                                   </div>
                                </div>
                             </div>
                             <div class="column one-third column_our_team">
                                    <!-- Team Member Area -->
                                    <div class="team team_vertical">
                                       <div class="image_frame no_link scale-with-grid">
                                          <div class="image_wrapper"><img class="scale-with-grid" src="images/project_1725_alcado_lateral_dereito.jpg" alt="Alçado Posterior">
                                          </div>
                                       </div>
                                       <div class="desc_wrapper">
                                          <p class="big"><?php echo $lang['project_1725']['content_5']; ?></p>
                                       </div>
                                    </div>
                                 </div>
                             <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
                             </div>
                          
                  <div class="hr_wide ">
                        <br><br>
                     </div>
                     
                     <h4 style="margin-left: 0% !important;margin-top: 4% !important"><?php echo $lang['project_1725']['content_6']; ?></h4>
                     <div class="section mcb-section" style="padding-top:60px; padding-bottom:50px; background-repeat:no-repeat;">
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_our_team">
                           <!-- Team Member Area -->
                           <div class="team team_vertical">
                              <div class="image_frame no_link scale-with-grid">
                                 <div class="image_wrapper"><img class="scale-with-grid" src="images/p1725_piso0.jpg" alt="Piso 0">
                                 </div>
                              </div>
                              <div class="desc_wrapper">
                                 <p class="big"><?php echo $lang['project_1725']['content_7']; ?></p>
                              </div>
                           </div>
                           
                        </div>
                        <!-- One Third (1/3) Column -->
                        <div class="column one-third column_our_team">
                           <!-- Team Member Area -->
                           <div class="team team_vertical">
                              <div class="image_frame no_link scale-with-grid">
                                 <div class="image_wrapper"><img class="scale-with-grid" src="images/p1725_piso1.jpg" alt="Alçado Posterior">
                                 </div>
                              </div>
                              <div class="desc_wrapper">
                                 <p class="big"><?php echo $lang['project_1725']['content_8']; ?></p>
                              </div>
                           </div>
                        </div>
                        <!-- One Third (1/3) Column -->                  
                        <!--<div class="column one-third column_column">
                           <div class="column_attr ">
                              <div class="flv_style_11">
                                 <h4>PROJECTO – LOTE 16
                                    <br>
                                    Planta Humanizada 
                                 </h4>
                                 <span class="big">Single House Family, implantada num terreno com 546,20 m2, localizada na esquina da 18th Street com a 17th Terrace, em Fort Lauderdale, Flórida.
                                 Casa de 2 Pisos, com um total de 272,70 m2, divididos entre o Piso 0 com 192,10 m2 e o Piso 1 com 80,60m2 .
                                 Composta por Hall de Entrada, 1 Suite, 2 Quartos com wc comum, 2.5 Instalações Sanitárias, Sala com Cozinha integrada, Lavandaria e Garagem para duas viaturas.
                                 Na área exterior com 354,10 m2, localiza-se uma Piscina com Zona de Solário, Varanda, Acessos e uma Área Ajardinada.
                                 </span>
                              </div>
                           </div>
                        </div>-->
                        <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;"></div>
                     </div>
                     <br>
                     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                     <div class="section mcb-section" style="padding-top:60px; padding-bottom:50px; background-repeat:no-repeat;">
                            <!-- One Second (1/2) Column -->
                            <div class="column one column_column">
                              <div class="column_attr ">
                                <h4><?php echo $lang['project_1725']['content_9']; ?></h4>
                              </div>
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="column one-second column_column">
                              <div class="column_attr ">
                                 <?php echo $lang['project_1725']['content_10']; ?>
                              </div>
                            </div>
                            <!-- One Third (1/2) Column -->
                            <div class="column one-second column_our_team">
                              <!-- Team Member Area -->
                              <div class="team team_vertical">
                                <div class="image_frame no_link scale-with-grid">
                                  <div class="image_wrapper"><img class="scale-with-grid" src="images/lotes-invision-1719-1725.png" alt="Alçado Posterior">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  <div class="section mcb-section" style="padding-top:40px; padding-bottom:50px; background-repeat:no-repeat;">
                    
                  <!-- Accordion Area -->
                  <div class="section" id="accordion flv_sections_16">
                     <!--<div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                           
                           
                           <br>
                           <div class="column one-second column_column">
                              <div class="column_attr" style="margin-top: 18%;margin-left: -105%;">
                                 <h4>PONTOS DE INTERESSE</h4>
                              </div>
                           </div>
                           
                              <div class="column one-second column_column">
                                  <div class="column_attr ">
                                      <h5 class="flv_style_4">Toggle</h5>
                                  </div>
                                   
                        </div>
                        
                        <div class="column one-second column_accordion">
                           <div class="accordion">
                              <div class="mfn-acc accordion_wrapper open1st">
                                 <div class="question active">
                                    <div class="title">
                                       <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;HOSPITAL
                                    </div>
                                    <div class="answer" style="display: block;">
                                       <p>
                                          <span class="big">Fort Lauderdale Hospital 3,20 mi 11 min.</span>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="question">
                                    <div class="title">
                                       <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;ESCOLAS
                                    </div>
                                    <div class="answer">
                                       <p>
                                          <span class="big">Bennett Elementary School 1,30 mi 7 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">Bayview Elementary School 2,80 mi 9 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">Virginia Shuman Young Elementary School 3,00 mi 10 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">Sunrise Middle School 1,30 mi 7 min </span>
                                       </p>
                                       <p>
                                          <span class="big">Fort Lauderdale High School 2,60 mi 6 min</span>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="question">
                                    <div class="title">
                                       <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;NATUREZA
                                    </div>
                                    <div class="answer">
                                       <p>
                                          <span class="big">Holiday Park 2,50 mi 6 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">George English Park 2,80 mi 9 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">Praia 3,20 mi 9 min. </span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="column one-second column_accordion">
                           <div class="accordion">
                              <div class="mfn-acc accordion_wrapper open1st toggle">
                                 <div class="question">
                                    <div class="title">
                                       <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;AEROPORTO
                                    </div>
                                    <div class="answer" style="display: none;">
                                       <p>
                                          <span class="big">Fort Lauderdale/Hollywood International Airport 7,40 mi 17 min.</span>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="question">
                                    <div class="title">
                                       <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;COMÉRCIO
                                    </div>
                                    <div class="answer" style="display: none;">
                                       <p>
                                          <span class="big">Las Olas 3,40 mi 12 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">Gateway Shopping Center 2,10 mi 5 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">alleria Fort Lauderdale 2,60 mi 8 min. </span>
                                       </p>
                                       <p>
                                          <span class="big">Plaza Del Mar 2,00 mi 5 min. </span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>-->
                     <div class="hr_wide ">
                        <hr>
                     </div>
                     <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
                        <!-- Accordion Area -->
                        <div class="section" id="accordion flv_sections_16">
                           <div class="section_wrapper clearfix">
                              <div class="items_group clearfix">
                                 <!-- One Second (1/2) Column -->
                                 <div class="column one-second column_column">
                                    <div class="column_attr ">
                                       <h4><?php echo $lang['project_1725']['content_11']; ?></h4>
                                    </div>
                                 </div>
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
                                             <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1725']['content_12']; ?>
                                          </div>
                                          <div class="answer">
                                                <?php echo $lang['project_1725']['content_13']; ?>
                                          </div>
                                       </div>
                                       <div class="question">
                                          <div class="title">
                                             <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1725']['content_14']; ?>
                                          </div>
                                          <div class="answer">
                                                <?php echo $lang['project_1725']['content_15']; ?>
                                          </div>
                                       </div>
                                       <div class="question">
                                          <div class="title">
                                             <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1725']['content_16']; ?>
                                          </div>
                                          <div class="answer">
                                             <?php echo $lang['project_1725']['content_17']; ?>
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
                                             <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1725']['content_18']; ?>
                                          </div>
                                          <div class="answer" style="display: none;">
                                             <?php echo $lang['project_1725']['content_19']; ?>
                                          </div>
                                       </div>
                                       <div class="question">
                                          <div class="title">
                                             <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i><i class="icon-star"></i>&nbsp;&nbsp;<?php echo $lang['project_1725']['content_20']; ?>
                                          </div>
                                          <div class="answer" style="display: none;">
                                             <?php echo $lang['project_1725']['content_21']; ?>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- One full width row-->
                              <div class="column one column_column">
                                 <!--<div class="column_attr ">
                                    <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-repeat:no-repeat;">
                                       <h4>MORADIA UNIFAMILIAR</h4>
                                    </div>
                                 </div>-->
                                 <!-- One Third (1/3) Column -->
                                 <!--<div class="column one-third column_hover_box">
                                    <div class="hover_box">
                                       <a href="#">
                                          <div class="hover_box_wrapper"><img class="visible_photo scale-with-grid" src="images/project_1725_alcado_frontal.jpg" alt=""><img class="hidden_photo scale-with-grid" src="images/project_1725_alçado_frontal.jpg" alt=""> </div>
                                       </a>
                                    </div>
                                 </div>
                                 
                                 <div class="column one-third column_hover_box">
                                    <div class="hover_box">
                                       <a href="#">
                                          <div class="hover_box_wrapper"><img class="visible_photo scale-with-grid" src="images/project_1725_alado_posterior.jpg" alt=""><img class="hidden_photo scale-with-grid" src="images/project_1725_alçado_posterior.jpg" alt=""> </div>
                                       </a>
                                    </div>
                                 </div>-->
                                 <!-- One Third (1/3) Column -->
                                 <!--<div class="column one-third column_hover_box">
                                    <div class="hover_box">
                                       <a href="#">
                                          <div class="hover_box_wrapper"><img class="visible_photo scale-with-grid" src="images/project_1725_alçado_lateral_esquerdo.jpg" alt=""><img class="hidden_photo scale-with-grid" src="images/project_1725_alçado_lateral_esquerdo.jpg" alt=""> </div>
                                       </a>
                                    </div>
                                 </div>-->
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
                                             <a rel="nofollow" href="project.php">
                                                 <button type="button"><?php echo $lang['project_1725']['button']; ?></button>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--<footer id="Footer" class="clearfix">
                     <div class="widgets_wrapper" style="padding:70px 0 60px;">
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
                     <h4>Membros Executivos</h4>
                     <div class="textwidget">
                     <ul style="line-height: 32px;">
                     <li>
                     <i style="color: #b2a475;" class="icon-right-dir"></i><a href="#">Renato Lerner</a>
                     </li>
                     <li>
                     <i style="color: #b2a475;" class="icon-right-dir"></i><a href="#">Siulmary Ovalles</a>
                     </li>
                     <li>
                     <i style="color: #b2a475;" class="icon-right-dir"></i><a href="#">Peter Addison</a>
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
                     <br>Escreva para nós: <a href="content/holding/invest@invisionrealestateinvestments.com">invest@invisionrealestateinvestments.com</a>
                     </p>
                     <p>
                     <br> 4000 Hollywood Blvd. Suíte 555S
                     Hollywood, Flórida, USA, 33021.
                     </p>
                     <p class="contact_icons">
                     <span>Encontre-nos aqui:</span><a style="font-size: 22px;" href="#"></a><a style="font-size: 22px;" href="#"><br><i class="icon-gplus-circled"></i></a><a style="font-size: 22px;" href="#"></a><a style="font-size: 22px;" href="#"><i class="icon-facebook-circled"></i></a>
                     </p>
                     </div>
                     </aside>
                     </div>
                     </div>
                     </div>
                     </footer>-->
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

