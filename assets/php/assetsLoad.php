<?php

    require 'dbConnection.php';

    $colums = ['Code', 'Brand', 'Model', 'Description', 'Remaining'];
    $table = 'assets';

    $input = isset($_POST['assets-code']) ? $connection ->real_escape_string($_POST['assets-code']) : null;

    $where = 'WHERE';

    if($input != null) {
        $where .= " code like '%".$input."%' AND";        
    }

    $sql = "SELECT " . implode(", ", $colums) . "
            FROM $table
            $where isdeleted = 0";

    $result = $connection -> query($sql);
    $num_rows = $result -> num_rows;

    $html = '';

    if ($num_rows > 0) {
        while( $row = $result -> fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td>'.$row['Code'].'</td>';
        $html .= '<td>'.$row['Brand'].'</td>';
        $html .= '<td>'.$row['Model'].'</td>';
        $html .= '<td>'.$row['Description'].'</td>';
        $html .= '<td>'.$row['Remaining'].'</td>';
        $html .= '<td><a href="">Editar</a></td>';
        $html .= '</tr>';
        }
    }else{
        $html .= '<tr>';
        $html .= '<td colspan = "7">Sin Resultados</td>';
        $html .= '</tr>';
    }

    echo json_encode($html, JSON_UNESCAPED_UNICODE);