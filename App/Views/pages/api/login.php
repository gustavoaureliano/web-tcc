<?php
    //header("Content-Type: application/json");
    $id = $parametros["id"];
    if ($id > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "login" => $id), JSON_UNESCAPED_UNICODE);
         
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "data" => "Nenhum usuário encontrado"), JSON_UNESCAPED_UNICODE);
    }