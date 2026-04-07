<?php

    $method = $_SERVER['REQUEST_METHOD'];
    $path = 'static/' . uniqid() . '.png';
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    $image = $data['image'];
    $base64_image = str_replace('data:image/png;base64,', '', $image);
    $image_data = base64_decode($base64_image);
    if ($method == 'POST') {
       file_put_contents($path, $image_data);
    } else {
        print("Method error");
    }

?>