<?php
    $type = 'image/jpeg';
    header('Content-Type:'.$type);
    $image = $parametros["image"];
    header('Content-Length: ' . strlen($image));

    echo $image;