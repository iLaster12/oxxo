<?php

    require 'dbConnection.php';

    $colums = ['Code', 'Brand', 'Model', 'Description', 'Remaining'];
    $table = 'assets';

    $input = isset($_POST['codigo']) ? $connection ->real_escape_string($_POST['codigo']) : null;

    $where = '';

    if($input != null) {
        $where = " WHERE code like '%".$input."%'";        
    }

    $sql = "SELECT " . implode(", ", $colums) . "
            FROM $table
            $where";

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