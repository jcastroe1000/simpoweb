<?php
session_start();
if (!isset($_SESSION['sesion_user'])) {
    header("Location: index.php");
} else if (isset($_SESSION['sesion_user']) != "") {
    header("Location:../login.php");
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['sesion_user']);
   header("Location: login.php");
}
?>