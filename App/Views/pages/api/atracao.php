<?php
    //header("Content-Type: application/json");
    $atracao = $parametros["atracao"];
    if ($atracao["idAtracao"] > 0) {
        http_response_code(200);
        echo json_encode(array('status' => 'success', "atracao" => $atracao), JSON_UNESCAPED_UNICODE);
         
    } else {
        http_response_code(404);
        echo json_encode(array('status' => 'error', "atracao" => "Nenhuma atração encontrada"), JSON_UNESCAPED_UNICODE);
    }