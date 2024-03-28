<?php

    $connection = mysqli_connect('localhost', 'root', '', 'oxxo');

    //creation the email vlaidation function
    function is_valid_email($str)
    {
        return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
    }
