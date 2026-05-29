<?php

function connectDatabase(): PDO {
    return new PDO(
        'mysql:host=localhost;dbname=blog1',
        'root',
        ''
    );
}

$method = $_SERVER['REQUEST_METHOD'];
$errorCheck = FALSE;
if ($method !== 'POST') {
    http_response_code(405);
    $errorCheck = TRUE;
}
if (!$errorCheck) {
    $data = json_decode($_POST['data'], true);  
    if (!$data) {
        http_response_code(400);
        $errorCheck = TRUE;
    }
    if (!$errorCheck) {
        if ( empty($data['user_id']) or empty($data['description']) or empty($_FILES['post_pic'])) {
            http_response_code(400);
            $errorCheck = TRUE;
        }
        if (!$errorCheck) {
            $image = $_FILES['post_pic'];
            $imageName = uniqid('img_') . '_' . basename($image['name']);
            $imagePath = '../images/' . $imageName;
            move_uploaded_file($image['tmp_name'], $imagePath);
            $dbImagePath = '../../images/' . $imageName;
            $connection = connectDatabase();
            $query = "
                INSERT INTO 
                    post (
                        user_id,
                        post_pic,
                        description,
                        like_amount,
                        post_time
                    )
                VALUES (
                    :user_id,
                    :post_pic,
                    :description,
                    :like_amount,
                    NOW()
                )
            ";
            $statement = $connection->prepare($query);
            $statement->execute([
                ':user_id' => $data['user_id'],
                ':post_pic' => $dbImagePath,
                ':description' => $data['description'],
                ':like_amount' => $data['like_amount']
            ]);
        }
    }
}

