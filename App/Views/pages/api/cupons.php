<?php
    //header("Content-Type: application/json");
    $cupons = $parametros["cupons"];
    //var_dump(array_values($ingressos)[0]);
    
    if (count($cupons) > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "cupons" => $cupons), JSON_UNESCAPED_UNICODE);
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "cupons" =>  $cupons), JSON_UNESCAPED_UNICODE);
    }