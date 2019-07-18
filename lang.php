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
        include "lang/".$_GET['lang']."/testimonial.php";
        include "lang/".$_GET['lang']."/contact.php";
		include "lang/".$_GET['lang']."/footer.php";
		
	}else{
		
		$idiom = "";
		
		include "lang/pt/menu.php";
		include "lang/pt/language.php";
		include "lang/pt/home.php";
		include "lang/pt/about.php";
		include "lang/pt/invest.php";
		include "lang/pt/project.php";
        include "lang/pt/testimonial.php";
        include "lang/pt/contact.php";
		include "lang/pt/footer.php";
		
	}
	
}else{
	
	$idiom = "";
	
	include "lang/pt/menu.php";
    include "lang/pt/language.php";
    include "lang/pt/home.php";
    include "lang/pt/about.php";
    include "lang/pt/invest.php";
    include "lang/pt/project.php";
    include "lang/pt/testimonial.php";
    include "lang/pt/contact.php";
    include "lang/pt/footer.php";
	
}
?>