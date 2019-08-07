<?php

 // ++++++++++++++++++++++++++++++++++++
//error_reporting(0);
include 'conexion.php';
	// Correo principal
$correo_it_to = "luis@ovalles.net";

$nombre=$_POST['name'];
$correo=$_POST['email'];
$empresa=$_POST['subject'];
$mensaje=$_POST['body'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
$headers .= 'From: '.stripslashes($correo_it_to);

// Verificamos si existe el registro
$check = mysqli_query("SELECT * FROM registro WHERE empresa='$empresa'");
$num_rows = mysqli_num_rows($check);

if (count($num_rows) == 0) {
	
	//Creamos la consulta de inserción.
	$query = "INSERT INTO `registro` (`nombre`, `correo`, `empresa`, `mensaje`) VALUES ('$nombre', '$correo', '$empresa', '$mensaje');";

	//Para ejecutar la consulta necesitamos escribir el siguiente código.
	$resultado = $conn->query($query);

	// Preparacion de la salida
	if($resultado){

		// Realizamos la excepcion para verificar errores  producidos en el envio
		try {
		    echo "OK";
		    send_email($correo,$empresa,$mensaje,$headers);
		} catch (Exception $e) {
		    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}
} else {
	echo "EXISTE";
}


$conn->close();


// Funcion para el envio de email
function send_email($correo,$empresa,$mensaje,$headers)
{
	if(mail($correo,$empresa,$mensaje,$headers)){
	echo "Enviado con exito";
	}else{
	echo "No se envio";
	}
}


?>
