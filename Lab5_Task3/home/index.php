<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link href="../media/style.css" rel="stylesheet">
    </head>
    <body class="block">
        <?php

            include 'posts_info.php';
                
        ?>
       <div class="back">
            <div>
                <img src="../media/Home_page.png" alt="Home page" class="icons" style="margin-top: 32px;">
                <img src="../media/dot.png" alt="Dot" class="icons dot">
            </div>
            <img src="../media/Profile.png" alt="Profile" class="icons">
            <img src="../media/Plus.png" alt="Add" class="icons">
       </div>
       <div class="headband">
            <h1 class="header">❤️ Вы сегодня сногсшибательны ❤️</h1>
       </div>
       <div class="scroll_bar">
            <?php 
            
            foreach ($posts as $post) {
                include 'post_preview.php';
            }

            ?>
       </div>
    </body>
</html>