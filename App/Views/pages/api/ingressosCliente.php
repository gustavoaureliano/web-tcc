<?php
    //header("Content-Type: application/json");
    $ingressos = $parametros["ingressos"];
    
    var_dump($parametros);
    var_dump($ingressos);
    if (count($ingressos) > 0) {
        http_response_code(200);
        echo "<pre>";
        echo json_encode(array('status' => 'sucdasdcess', "ingressos" => $ingressos), JSON_UNESCAPED_UNICODE);
         
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'errodsr', "ingressos" => $ingressos), JSON_UNESCAPED_UNICODE);
    }