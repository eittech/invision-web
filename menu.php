<?php

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
            <li class="<?php echo $current_page_item_1; ?>">
                <a href="index.php"><span><?php echo $lang['menu']['home']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_2; ?>">
                <a href="about.php"><span><?php echo $lang['menu']['about']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_3; ?>">
                <a href="invest.php"><span><?php echo $lang['menu']['invest']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_4; ?>">
                <a href="project.php"><span><?php echo $lang['menu']['project']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_5; ?>">
                <a href="testimonial.php"><span><?php echo $lang['menu']['testimonial']; ?></span></a>
            </li>
            <li class="<?php echo $current_page_item_6; ?>">
                <a href="contact.php"><span><?php echo $lang['menu']['contact']; ?></span></a>
            </li>
        </ul>
    </nav>
    <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
</div>