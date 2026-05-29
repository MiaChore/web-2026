<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Пост</title>
    <link href="../media/style.css" rel="stylesheet">
</head>
<body class="block">
    <?php

        $postId = $_GET['postId'];
        include 'posts_info.php';
        $currentPost = null;

        foreach ($posts as $post) {
            if ($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
                
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
            <h1 class="header">Пост №<?= $postId?></h1>
       </div>
       <div class="scroll_bar">
            <?php 
            
                $post = $currentPost;
                include 'post_preview.php';

            ?>
       </div>

</body>
</html>