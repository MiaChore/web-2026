<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link href="../../media/style.css" rel="stylesheet">
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
            <h1 class="header"></h1>
        </div>
        <div class="scroll_bar">        
            <?php

                function connectDatabase(): PDO {
                    return new PDO(
                        'mysql:host=localhost;dbname=blog1',
                        'root',
                        ''
                    );
                }

                function getPosts(PDO $connection) {
                    $query = "
                        SELECT
                            post.*,
                            user.nickname,
                            user.pfp
                        FROM 
                            post
                        JOIN 
                            user
                        ON 
                            post.user_id = user.user_id
                    ";
                    $statement = $connection->query($query);
                    return $statement->fetchAll(PDO::FETCH_ASSOC);
                }

                $connection = connectDatabase();

            ?>
            <div class="post_add">
                🖼
            </div>
        </div>
    </body>
</html>