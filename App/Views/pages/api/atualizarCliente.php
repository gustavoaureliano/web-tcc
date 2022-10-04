<?php
    //header("Content-Type: application/json");
    $sucesso = $parametros["sucesso"];
    if ($sucesso) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "atualizar" => $sucesso), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "atualizar" =>  $sucesso), JSON_UNESCAPED_UNICODE);
    }