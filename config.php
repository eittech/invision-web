<?php
// Variables de activación/desactivación del menú y el footer en las diferentes páginas. Valores posibles 0 o 1.
$index = $config['config']['menu']['index']['active'] = 1;
$about = $config['config']['menu']['about']['active'] = 1;
$invest = $config['config']['menu']['invest']['active'] = 1;
$project = $config['config']['menu']['project']['active'] = 1;
$testimonial = $config['config']['menu']['testimonial']['active'] = 1;
$contact = $config['config']['menu']['contact']['active'] = 1;

$footer = $config['config']['footer']['maintenance']['active'] = 1;
// Mantenimiento
$maintenance = $config['config']['menu']['maintenance']['active'] = 0;
$maintenance_footer = $config['config']['footer']['maintenance']['active'] = 1;
$config['config']['maintenance']['active'] = 0;  // Activar/desactivar la página de mantenimiento
// Aquí mismo hacemos la redirección a la página de mantenimiento si está activada y si no estamos ya en ella. Si se desactiva redirigimos al index.
if($page_name != 'maintenance'){
	
	if($config['config']['maintenance']['active'] == 1){
	
		header("Location: maintenance.php");
		
	}
	
}else{
	
	if($config['config']['maintenance']['active'] == 0){
	
		header("Location: index.php");
		
	}
	
}
?>