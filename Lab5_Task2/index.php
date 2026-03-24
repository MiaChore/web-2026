<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your sign</title>
</head>
<body>
    <div>
        <?php

            $posts = [
                [
                    'id' => 1,
                    'title' => 'title',
                    'subtitle' => 'subtitle',
                    'img_modifier' => '',
                    'author' => 'me',
                    // другие свойства этого поста
                ],
                [
                    'id' => 2,
                    'title' => 'New Album',
                    'subtitle' => 'Самый желанный из меню<br>Я никогда не изменю',
                    'img_modifier' => '',
                    'author' => 'Sqwoz Bab',
                    // свойства второго поста
                ],
            ];
            
        ?>
    </div>
    <div>
        <?php 
            
            foreach ($posts as $post) {
                include 'post_preview.php';
            }

        ?>
    </div>
</body>
</html>