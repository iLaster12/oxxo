<?php

    session_start();

    if(isset($_SESSION["user"])){
        header('location: queryAssets.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=031.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>OXXO</title>
</head>
    <body>
        <div class='login_container'>
        
            <div class="logo">
                <img src="assets/images/Femsa_Logo.png" alt="">
            </div>

            <form method="post" action="php/userLogin.php">
                <div class="container">
                    <label for="uname"><b>Nombre de usuario</b></label>
                    <input type="text" placeholder="Correo/Numero de cliente" name="uname" required>
                    
                    <label for="psw"><b>Contraseña</b></label>
                    <input type="password" placeholder="Contraseña" name="psw" required>

                    <button type="submit">Iniciar Sesion</button>

                </div>
            </form>
            
        </div>
    </body>
</html>