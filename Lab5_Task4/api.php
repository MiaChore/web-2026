<?php

    $method = $_SERVER['REQUEST_METHOD'];
    $path = __DIR__ . '/static';
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    $image_data = base64_decode($base64_image);
    if ($method == 'POST') {
       file_put_contents($path, $image_data);
    } else {
        print("Method error");
    }

?>