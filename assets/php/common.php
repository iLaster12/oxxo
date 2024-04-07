<?php

    //callimg db conection
    include 'dbConnection.php';

    //checking the loged user
    $uname = $_SESSION['user'];

    $query = "SELECT firstName FROM users WHERE username = '$uname'";

    //sending the user name
    $result = mysqli_query($connection, $query);
    $extraccion = $result->fetch_array();
    $menuName = $extraccion["firstName"];