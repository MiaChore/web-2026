<?php

    $connection = new PDO(
        'mysql:host=localhost;dbname=blog1',
        'root',
        ''
    );

$data = json_decode(
    file_get_contents('php://input'),
    true
);

$postId = $data['post_id'];

$query = "
    SELECT liked, like_amount
    FROM post
    WHERE id_post = :post_id
";

$statement = $connection->prepare($query);

$statement->execute([
    ':post_id' => $postId
]);

$post = $statement->fetch(PDO::FETCH_ASSOC);

if ($post['liked']) {

    $liked = 0;
    $likes = $post['like_amount'] - 1;

} else {

    $liked = 1;
    $likes = $post['like_amount'] + 1;
}

$query = "
    UPDATE post
    SET
        liked = :liked,
        like_amount = :likes
    WHERE id_post = :post_id
";

$statement = $connection->prepare($query);

$statement->execute([
    ':liked' => $liked,
    ':likes' => $likes,
    ':post_id' => $postId
]);

echo json_encode([
    'success' => true,
    'liked' => $liked,
    'likes' => $likes
]);