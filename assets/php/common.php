<?php

    include("dbConnection.php");

    $uname = ($_SESSION['user']);
    $query = "SELECT FirstName FROM internalusers WHERE EmployeeNumber = '$uname'";

    $result = mysqli_query($connection, $query);
    $extraccion = $result->fetch_array();
    $menuName = $extraccion["FirstName"];

