<?php

    session_start();

    include("./dbConnection.php");

    $uname = $_POST['uname'];
    $psw = $_POST['psw'];
    $hash = hash('sha256', $psw);

    $query = "SELECT * FROM internalusers WHERE EmployeeNumber = '$uname' AND Hash = '$hash'";

    $loginValidation = mysqli_query($connection, $query);

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