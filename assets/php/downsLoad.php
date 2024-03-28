<?php

    require 'dbConnection.php';

    $colums = ['Code', 'Brand', 'Model', 'Description', 'Remaining'];
    $table = 'assets';

    $input = isset($_POST['downs-code']) ? $connection ->real_escape_string($_POST['downs-code']) : null;

    $sql = "SELECT * FROM $table WHERE code = $input AND isdeleted = 0" ;

    $result = $connection -> query($sql);
    $num_rows = $result -> num_rows;

    $html = '';

    if ($input != null && $num_rows > 0) {
        while( $row = $result -> fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$row['Code'].'</td>';
        $html .= '<td>'.$row['Brand'].'</td>';
        $html .= '<td>'.$row['Model'].'</td>';
        $html .= '<td>'.$row['Description'].'</td>';
        $html .= '<td>'.$row['Remaining'].'</td>';
        $html .= '<td><a href>Eliminar</a></td>';
        $html .= '</tr>';
        }
    }else{
        $html .= '<tr>';
        $html .= '<td colspan = "5">Sin Resultados</td>';
        $html .= '</tr>';
    }

    echo json_encode($html, JSON_UNESCAPED_UNICODE);
    