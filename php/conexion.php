<?php 

$conn = new mysqli("localhost", "root", "", "db");

if (mysqli_connect_errno()) {
die("No se puede conectar a la base de datos:" . mysqli_connect_error());
}


 ?>