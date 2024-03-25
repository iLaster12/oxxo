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

   include("php/common.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sideMenu.css">
    <link rel="stylesheet" href="assets/css/queryAssets.css">

    <title>OXXO</title>
</head>
    <body>
        
    
    <!--lateral menu-->
        <menu id = "sidemenu" class = "menu-expanded">

        <!--header-->
            <div id = "header">
                <div id = "title"><span>Control de Activos</span></div>
                <div id = "menu-btn">
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                    <div class="btn-hamburger"></div>
                </div>
            </div>

            
        <!--profile-->
            <div id = 'profile'>
                <div id="photo"><img src="./assets/images/user_icon.png" alt=""></div>
                <div id="name"><span>Bienvenid@</span></div>
                <div id="name"><span> <?php echo $menuName; ?> </span></div>
            </div>
            
        <!--items-->
            <div id="menu-items">
                <div class="item">
                    <a href="queryAssets.php">
                        <div class="icon"><img src="./assets/images/query_icon.png" alt=""></div>
                        <div class="title"><span>Consultas</span></div>
                    </a>
                </div>
                <div class="item">
                    <a href="additions.php">
                        <div class="icon"><img src="./assets/images/alta_icono.png" alt=""></div>
                        <div class="title"><span>Altas</span></div>
                    </a>
                </div>
                <div class="item">
                    <a href="downs.php">
                        <div class="icon"><img src="./assets/images/baja_icono.png" alt=""></div>
                        <div class="title"><span>Bajas</span></div>
                    </a>
                </div>
                <div class="item">
                    <a href="changes.php">
                        <div class="icon"><img src="./assets/images/cambio_icono.png" alt=""></div>
                        <div class="title"><span>Cambios</span></div>
                    </a>
                </div>
                <div class="item">
                    <a href="transfers.php">
                        <div class="icon"><img src="./assets/images/traspaso_icon.png" alt=""></div>
                        <div class="title"><span>Traspasos</span></div>
                    </a>
                </div>
                <div class="item">
                    <a href="users.php">
                        <div class="icon"><img src="./assets/images/usuarios_icon.png" alt=""></div>
                        <div class="title"><span>Usuarios</span></div>
                    </a>
                </div>
                <div class="item" id="close-sesion">
                    <a href="./php/closeSesion.php">
                        <div class="icon"><img src="./assets/images/logout_icon.png" alt=""></div>
                        <div class="title"><span>Cerrar sesion</span></div>
                    </a>
                </div>
            </div>

        </menu>
        

        <script>
                const btn = document.querySelector('#menu-btn');
                const menu = document.querySelector('#sidemenu');

                btn.addEventListener('click', e =>{
                    menu.classList.toggle("menu-expanded");
                    menu.classList.toggle("menu-collapsed");

                    document.querySelector('body').classList.toggle('body-expanded');
                });
        </script>