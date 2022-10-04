<?php
    //header("Content-Type: application/json");
    $ingressos = $parametros["ingressos"];
    //var_dump(array_values($ingressos)[0]);
    
    if (count($ingressos) > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "ingressos" => $ingressos), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "ingressos" => $ingressos), JSON_UNESCAPED_UNICODE);
    }