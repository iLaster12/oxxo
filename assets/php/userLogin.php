<?php

    //Start sesion cookie
    session_start();

    //including db conection
    include("./dbConnection.php");

    //Reciving data from login and cleaning the injections
    $uname = isset($_POST['uname']) ? $connection ->real_escape_string($_POST['uname']) : null;
    $psw = isset($_POST['psw']) ? $connection ->real_escape_string($_POST['psw']) : null;
    $hash = hash('sha256', $psw);

    //User Validation
    if(is_valid_email($uname)){
        $query = "SELECT * FROM externalusers WHERE Email = '$uname' AND Hash = '$hash'";
    }else{
        $query = "SELECT * FROM internalusers WHERE EmployeeNumber = '$uname' AND Hash = '$hash'";
    }

    //User authentification
    $loginValidation = mysqli_query($connection, $query);

    //Login Error
    if(mysqli_num_rows($loginValidation) > 0){
        $_SESSION['user'] = $uname;
        header("location: ../../queryAssets.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario y/o Contraseña equivocados");
                window.location = "../index.php"
            </script>
        ';
        exit;
    }