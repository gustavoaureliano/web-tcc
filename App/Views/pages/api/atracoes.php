<?php
    //header("Content-Type: application/json");
    $atracoes = $parametros["atracoes"];
    if (count($atracoes) > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "atracoes" => $atracoes), JSON_UNESCAPED_UNICODE);
         
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "atracoes" => "Nenhuma atração encontrada"), JSON_UNESCAPED_UNICODE);
    }