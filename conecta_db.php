<?php

$conecta=mysqli_connect('localhost','root','','practica');

	if ($conecta->connect_error) {
    die("Fallo de Conexión: " . $conecta->connect_error);
} 
?>