<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link href="../../media/style.css" rel="stylesheet">
        </style>
    </head>
    <body class="block">
        <?php

            $posts = [
                [
                    'id' => 1,
                    'user-photo' => "../../media/user_first.jpg",
                    'subtitle' => '1234',
                    'author' => 'Максим Крылов',
                    'post-time' => '12 часов назад',
                    'post-photo' => '../../media/block_2.png',
                    'likes' => '234',
                    'alt-post-name' => 'Второй корпус'
                ],
                [
                    'id' => 2,
                    'user-photo' => "../../media/user_second.jpg",
                    'subtitle' => '%%%%%%%%%%%%%%',
                    'author' => 'Егор Шевчук',
                    'post-time' => '7 часов назад',
                    'post-photo' => '../../media/smiling_guy.png',
                    'likes' => '999',
                    'alt-post-name' => 'Улыбающийся парень'
                ],
            ];
                
        ?>
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
            
            foreach ($posts as $post) {
                include 'post_preview.php';
            }

            ?>
       </div>
    </body>
</html>