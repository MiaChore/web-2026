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
                <img src="../../media/Home_page.png" alt="Главная страница" class="icons" style="margin-top: 32px;">
                <img src="../../media/dot.png" alt="Точка" class="icons dot">
            </div>
            <img src="../../media/Profile.png" alt="Профиль" class="icons">
            <img src="../../media/Plus.png" alt="Добавить" class="icons">
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

                function getTimeAgo($datetime) {
                    $post_time = strtotime($datetime);
                    $difference = time() - $post_time;
                    switch (true) {
                        case $difference < 60:
                            return 'только что';
                        case $difference < 3600:
                            $minutes = floor($difference / 60);
                            return $minutes . ' мин назад';
                        case $difference < 86400:
                            $hours = floor($difference / 3600);
                            return $hours . ' ч назад';
                        case $difference < 2592000:
                            $days = floor($difference / 86400);
                            return $days . ' дн назад';
                        case $difference < 31536000:
                            $months = floor($difference / 2592000);
                            return $months . ' мес назад';
                        default:
                            $years = floor($difference / 31536000);
                            return $years . ' г назад';
                    }  
                }

                $connection = connectDatabase();
                $posts = getPosts($connection);
                foreach ($posts as $post) {
                    include 'post_preview.php';
                }

            ?>
        </div>
        <div class="modal">
            <div class="modal_content">
                <button class="close_modal">×</button>
                <img src="" class="modal_image">
                <button class="arrow modal_left">‹</button>
                <button class="arrow modal_right">›</button>
                <div class="modal_counter">1/3</div>
            </div>
        </div>    
    </body>
    <script src="slider.js"></script>
    <script src="likes.js"></script>
</html>