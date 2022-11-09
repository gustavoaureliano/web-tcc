<?php
    //header("Content-Type: application/json");
    $idCliente = $parametros["idCliente"];

    if ($idCliente > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "check" => $idCliente), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "check" => $idCliente), JSON_UNESCAPED_UNICODE);
    }