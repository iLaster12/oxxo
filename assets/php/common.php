<?php

    //callimg db conection
    include 'dbConnection.php';

    //checking the loged user
    $uname = ($_SESSION['user']);

    //validation if is internal or external
    if(is_valid_email($uname)){
        $query = "SELECT FirstName, Email FROM externalusers WHERE Email = '$uname'";
        $user = 'Internal';
    }else{
        $query = "SELECT FirstName, EmployeeNumber FROM internalusers WHERE EmployeeNumber = '$uname'";
        $user = 'External';
    }

    //sending the user name
    $result = mysqli_query($connection, $query);
    $extraccion = $result->fetch_array();
    $menuName = $extraccion["FirstName"];