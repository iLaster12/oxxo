
<!--
    header
-->

<?php

    session_start();

    if(!isset($_SESSION["user"])){
        echo '
            <script>
                alert("Sesion aun no inicializada");
                window.location = "index.php";
            </script>
        ';
        //header('location: index.php');
        session_destroy();
        die();
    }

   include("./assets/php/common.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sideMenu.css">