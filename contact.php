<?php
include('conexion.php');
	//las variables o strings las tenes que sanitizar antes de guardarlas.
	//http://php.net/manual/es/mysqli.real-escape-string.php
	//real_escape_string
	//$_REQUEST['chorizo'] = POST O GET
	$name = $conexion->real_escape_string($_REQUEST['name']);
	$email = $conexion->real_escape_string($_REQUEST['email']);
	$subject = $conexion->real_escape_string($_REQUEST['subject']);
	$message = $conexion->real_escape_string($_REQUEST['message']);
	 
	$consulta = "INSERT INTO contact 
				VALUES (
				'$name', 
				'$email', 
				'$subject', 
				'$message')";

  if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error($conexion);
  }

// Perform a query, check for error
if (!mysqli_query($conexion, $consulta))
  {
  	//echo("Error description: " . mysqli_error($conexion));
  	header("location:contacthtml.php?error=yes");
  } else {
  	header("location:contacthtml.php?error=no");
  }

/*
	if ($consulta == TRUE) {
		echo "tus datos fueron ingresados correctamente";
		//header("location: contact.html");
		} 
		else {
		echo "no pudimos ingresar tu info";
	}
*/
?>
