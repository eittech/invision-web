<?php

    $idiom_active = $_GET['lang'];

    $segment = $_SERVER['PHP_SELF'];
    $segment = explode("/", $segment);
    $segment = $segment[2];
    $segment = explode(".", $segment);
    $segment_url = $segment[0];
    
    //$current_page_item = "";
    if($segment_url == "index"){
        $current_page_item_1 = "current_page_item";
    }else if($segment_url == "about"){
        $current_page_item_2 = "current_page_item";
    }else if($segment_url == "invest"){
        $current_page_item_3 = "current_page_item";
    }else if($segment_url == "project"){
        $current_page_item_4 = "current_page_item";
    }else if($segment_url == "testimonial"){
        $current_page_item_5 = "current_page_item";
    }else if($segment_url == "contact"){
        $current_page_item_6 = "current_page_item";
    }
?>
<div class="menu_wrapper">
    <nav id="menu" class="menu-main-menu-container">
        <ul id="menu-main-menu" class="menu">
            <li <?php if((int)$index == 0){echo "style='display:none;'";} ?> class="<?php echo $current_page_item_1; ?>">
                <a href="index.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['home']; ?></span></a>
            </li>
            <li <?php if((int)$about == 0){echo "style='display:none;'";} ?> class="<?php echo $current_page_item_2; ?>">
                <a href="about.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['about']; ?></span></a>
            </li>
            <li <?php if((int)$invest == 0){echo "style='display:none;'";} ?> class="<?php echo $current_page_item_3; ?>">
                <a href="invest.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['invest']; ?></span></a>
            </li>
            <li <?php if((int)$project == 0){echo "style='display:none;'";} ?> class="<?php echo $current_page_item_4; ?>">
                <a href="project.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['project']; ?></span></a>
            </li>
            <li <?php if((int)$testimonial == 0){echo "style='display:none;'";} ?> class="<?php echo $current_page_item_5; ?>">
                <a href="testimonial.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['testimonial']; ?></span></a>
            </li>
            <li <?php if((int)$contact == 0){echo "style='display:none;'";} ?> class="<?php echo $current_page_item_6; ?>">
                <a href="contact.php<?php echo $idiom; ?>"><span><?php echo $lang['menu']['contact']; ?></span></a>
            </li>
            <!-- Menu de idioma -->
                <li style="display:block;" class="nav-item dropdown hidden-xs hidden-sm submenu last" id="li_language">
                    <a class="nav-link smooth-scroll dropdown-toggle count-info page-scroll" data-toggle="dropdown" href="#" title="Idioma">
                        <!--<img src="images/language.png">-->
                        <span class="label label-warning" id="span_num_respuestas">Language</span>
                    </a>
                    <ul class="dropdown-menu" style="background-color: rgb(93, 104, 174) !important; color: rgb(255, 255, 255) !important; display: none;">
                        <li <?php if($idiom_active == "pt"){ echo "hidden"; } ?>>
                            <a class="nav-link smooth-scroll" href="index.php?lang=pt" style="color:#f2f2f2 !important">
                                <div>
                                    <b>Portugues</b>
                                </div>
                            </a>
                        </li>
                        <li <?php if($idiom_active == "en"){ echo "hidden"; } ?>>
                            <a class="nav-link smooth-scroll" href="index.php?lang=en" style="color:#f2f2f2 !important">
                                <div>
                                    <b>English</b>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li <?php if($idiom_active == "es"){ echo "hidden"; } ?>>
                            <a class="nav-link smooth-scroll" href="index.php?lang=es" style="color:#f2f2f2 !important">
                                <div>
                                    <b>Spanish</b>
                                </div>
                            </a>
                        </li>
                        <li class="divider last-item"></li>
                    </ul>
                    <span class="menu-toggle"></span>
                </li>
            </ul>
        
    </nav>
    <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
</div>