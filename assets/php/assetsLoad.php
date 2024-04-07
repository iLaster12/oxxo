<?php

    require 'dbConnection.php';

    $colums = ['Code', 'Brand', 'Model', 'Description', 'Remaining'];
    $table = 'assets';

    $input = isset($_POST['assets-code']) ? $connection ->real_escape_string($_POST['assets-code']) : null;

    $sql = "SELECT * FROM $table WHERE code = $input AND isdeleted = 0" ;

    $result = $connection -> query($sql);
    $num_rows = $result -> num_rows;

    $html = '';

    if ($input != null && $num_rows > 0) {
        while( $row = $result -> fetch_assoc()){
        $html .= '<tr>';
        $html .= '<td id="td-code">'.$row['Code'].'</td>';
        $html .= '<td id="td-brand">'.$row['Brand'].'</td>';
        $html .= '<td id="td-model">'.$row['Model'].'</td>';
        $html .= '<td id="td-description">'.$row['Description'].'</td>';
        $html .= '<td id="td-remaining">'.$row['Remaining'].'</td>';
        $html .= '<td><button class = int-btn>Eliminar <button class = int-btn>Cambiar</td>';
        $html .= '</tr>';
        }
    }else{
        $html .= '<tr>';
        $html .= '<td colspan = "6">Sin Resultados</td>';
        $html .= '</tr>';
    }

    echo json_encode($html, JSON_UNESCAPED_UNICODE);