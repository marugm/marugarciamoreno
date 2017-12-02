<?php


	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	include('conexion.php');

	echo "$conexion";


	$consulta = mysqli_query($conexion, 
							"INSERT INTO contact 
							VALUES (
							'$name', 
							'$email', 
							'$subject', 
							'$message')"
							);
	//or die("Problemas al insertar registro");


	if ($consulta == TRUE) {
	echo "tus datos fueron ingresados correctamente";
		//header("location: contact.html");
		} else {
	echo "no pudimos ingresar tu info";
	}


?>