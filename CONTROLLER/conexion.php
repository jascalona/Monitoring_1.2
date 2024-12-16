<?php

$server = "127.0.0.1";
$user = "root";
$password = "";
$database = "gxdeve_apps";
$port = "3306";

// Create connection
$conexion = mysqli_connect($server, $user, $password, $database, $port);

// Check connection
if (!$conexion) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
