
<?php
//Conexion con mysql.
$dbhost="127.0.0.1";
$dbuser="root"; //user
$dbpass=""; //
$dbname="simpoweb"; //nombre de la base de datos
$con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
