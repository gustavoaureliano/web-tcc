<?php
    $idPedido = $parametros["idPedido"];

    if ($idPedido > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "compra" => true), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "compra" => false), JSON_UNESCAPED_UNICODE);
    }