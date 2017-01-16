<?php

include("../model/connection.php");

$name = $_POST['FullName'];
$lastname = $_POST['LastName'];
$email=$_POST['email_contact'];
$telephone=$_POST['telephone_contact'];
$gender=$_POST['gender'];
$city=$_POST['city'];



mysqli_select_db($con, "$dbname");

$query = mysqli_query($con, "INSERT INTO register (nombre,apellidos,email,telefono,genero,ciudad) VALUES ('$name','$lastname','$email','$telephone','$gender','$city')");
mysqli_close($con);

?>