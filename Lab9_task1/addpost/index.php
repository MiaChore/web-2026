<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link href="../../media/style.css" rel="stylesheet">
    </head>
    <body class="block">
        <div class="back">
            <a href="../home">
                <img
                    src="../../media/Home_page.png"
                    alt="Главная страница"
                    class="icons"
                    style="margin-top: 32px;"
                >
            </a>
                
            <a href="../../Lab6_task2-4/profile">
                <img
                    src="../../media/Profile.png"
                    alt="Профиль"
                    class="icons"
                >
            </a>
            <div>
                <a href="">
                    <img
                        src="../../media/Plus.png"
                        alt="Добавить пост"
                        class="icons"                
                    >
                </a> 
                <img 
                    src="../../media/dot.png" 
                    alt="Точка" 
                    class="icons dot" 
                    style="margin-top: 44px;">
            </div>
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
            <div class="post_add_main_block">
                <div class="slider_container">
                    <img
                        src="../../media/painting.png"
                        id="placeholderIcon"
                        class="post_add_icons"
                        alt="Добавить фото"
                    >
                    <img
                        id="previewImage"
                        class="post_preview"
                        alt="Предпросмотр"
                    >
                    <button
                        class="arrow left_arrow"
                        id="leftArrow"
                        style="display:none;"
                    >
                        ‹
                    </button>
                    <button
                        class="arrow right_arrow"
                        id="rightArrow"
                        style="display:none;"
                    >
                        ›
                    </button>
                    <button class="button_add main_block" id="addPhotoMainButton">Добавить фото</button>
                </div>
            </div>
            <input
                type="file"
                id="photoInput"
                hidden
                multiple
                accept="image/*"
            > 
            <button class="button_add little_button" id="addPhotoSecondaryButton">
                <img src="../../media/add_photo.png" class="add_post icon"> 
                <span class="add_post add_photo">Добавить фото</span>
            </button>
            <input
                id="descriptionInput"
                class="add_post add_description"
                type="text"
                placeholder="Добавьте подпись..."
            >
            <button id="shareButton" class="add_post share" disabled>Поделиться</button>
        </div>        
    </body>
    <script src="create_post.js"></script>
</html>