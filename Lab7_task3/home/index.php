<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link href="../../media/style.css" rel="stylesheet">
        </style>
    </head>
    <body class="block">
       <div class="back">
            <div>
                <img src="../../media/Home_page.png" alt="Home page" class="icons" style="margin-top: 32px;">
                <img src="../../media/dot.png" alt="Dot" class="icons dot">
            </div>
            <img src="../../media/Profile.png" alt="Profile" class="icons">
            <img src="../../media/Plus.png" alt="Add" class="icons">
       </div>
       <div class="headband">
            <h1 class="header">Легенды ПС-12</h1>
       </div>
       <div class="scroll_bar">
            <?php 
            
            $connection = connectDatabase();
            $postId = savePostToDatabase($connection, [
                'pfp' => 'Аватарка',
                'post_pic' => 'Фотография поста',
                'subtitle' => 'Описание',
                'like_amount' => 'Количество лайков',
                'time_ago' => 'Дата поста',
            ]);

            $post = findPostInDatabase($connection, $postId);
            var_dump($post);

            function connectDatabase(): PDO {
                $dsn = 'mysql:host=127.0.0.1;dbname=blog1';
                $user = 'admin';
                $password = 'ispring';
                return new PDO($dsn, $user, $password);
            }
            
            function savePostToDatabase(PDO $connection, array $postParams): int {
                $pfp = $connection->quote($postParams['title']);
                $post_pic = $connection->quote($postParams['post_pic']);
                $subtitle = $connection->quote($postParams['subtitle']);
                $like_amount = $connection->quote($postParams['like_amount']);
                $time_ago = $connection->quote($postParams['time_ago']);
                $query = <<<SQL 
                    INSERT INTO post (pfp, post_pic, subtitle, like_amount, time_ago)
                    VALUES ('$pfp', '$post_pic', '$subtitle', '$like_amount', '$time_ago')
                    SQL;
                $connection->exec($query)
                return (int)$connection->lastInsertId();
            }
            
            function findPostInDatabase(PDO $connection, int $id): array {
                $query = /* ... */;
                $statement = $connection->query($query);
                $row = $statement->fetch(PDO::FETCH_ASSOC);
                if (!$row) {
                    throw new RuntimeException("Post with id $id not found");
                }
                return $row;
            }

            function handleAddPost() {
                $postData = [
                    pfp, post_pic, subtitle, like_amount, time_ago
                'pfp' => $_POST['pfp'],
                'post_pic' => $_POST['post_pic'],
                'subtitle' => $_POST['subtitle'],
                'like_amount' => $_POST['like_amount'],
                'time_ago' => $_POST['time_ago'],
                
                ];
                $connection = connectDatabase();
                $postId = savePostToDatabase($connection, $postData);
                writeRedirectSeeOther("/show_post.php?post_id=$postId");
            }
            
            declare(strict_types=1);
            require_once /* ... */;

            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                writeRedirectSeeOther('/');
                exit();
            }
            handleAddPost();
            

            ?>
       </div>
    </body>
</html>