<?php
    header("Content-Type: application/json");
    $success = $parametros["success"];
    $cliente = $parametros["cliente"];

    if ($success) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "data" => $cliente), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "data" => "Nenhum usuário encontrado"), JSON_UNESCAPED_UNICODE);
    }