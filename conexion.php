<?php

/* $conexion = mysqli_connect("localhdost", "root", "", "marugarciamoreno")
or die(mysqli_error($conexion))
echo "$conexion"; */

/* echo "blaa";
echo mysqli_connect("localhost", "root", "root", "marugarciamoreno"); */


$user = 'root';
$password = 'root';
$db = 'marugarciamoreno';
$host = 'localhost';
$port = 8888;//generalmente el puerto de mysql es el de 3366

//$link = mysqli_init();

$conexion = mysqli_connect($host,$user,$password,$db);
/*
$conexion = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
*/
?>