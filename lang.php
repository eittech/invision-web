<?php

// Código para validar la carga del idioma seleccionado por el visitante
if(isset($_GET['lang'])){

	if($_GET['lang'] == "en" || $_GET['lang'] == "es"){
		
		$idiom = "?lang=".$_GET['lang'];
		
		include "lang/".$_GET['lang']."/menu.php";
		include "lang/".$_GET['lang']."/language.php";
		include "lang/".$_GET['lang']."/home.php";
		include "lang/".$_GET['lang']."/about.php";
		include "lang/".$_GET['lang']."/invest.php";
		include "lang/".$_GET['lang']."/project.php";
		include "lang/".$_GET['lang']."/project-1117.php";
		include "lang/".$_GET['lang']."/project-1719.php";
		include "lang/".$_GET['lang']."/project-1725.php";
        include "lang/".$_GET['lang']."/testimonial.php";
        include "lang/".$_GET['lang']."/contact.php";
		include "lang/".$_GET['lang']."/footer.php";
		
	}else{
		
		$idiom = "";
		
		include "lang/en/menu.php";
		include "lang/en/language.php";
		include "lang/en/home.php";
		include "lang/en/about.php";
		include "lang/en/invest.php";
		include "lang/en/project.php";
		include "lang/en/project-1117.php";
		include "lang/en/project-1719.php";
		include "lang/en/project-1725.php";
        include "lang/en/testimonial.php";
        include "lang/en/contact.php";
		include "lang/en/footer.php";
		
	}
	
}else{
	
	$idiom = "";
	
	include "lang/en/menu.php";
    include "lang/en/language.php";
    include "lang/en/home.php";
    include "lang/en/about.php";
    include "lang/en/invest.php";
	include "lang/en/project.php";
	include "lang/en/project-1117.php";
	include "lang/en/project-1719.php";
	include "lang/en/project-1725.php";
    include "lang/en/testimonial.php";
    include "lang/en/contact.php";
    include "lang/en/footer.php";
	
}
?>