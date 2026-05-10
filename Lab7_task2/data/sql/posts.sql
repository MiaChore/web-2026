INSERT INTO user (
    nickname,
    pfp
)
VALUES
(
    'Максим Крылов',
    '../../media/user_first.jpg'
),
(
    'Егор Шевчук',
    '../../media/user_second.jpg'
);

INSERT INTO post (
    user_id,
    post_pic,
    description,
    like_amount,
    post_time
)
VALUES
(
    1,
    '../../media/block_2.png',
    'Первый пост',
    200,
    '2026-04-07 14:30:00'
),
(
    2,
    '../../media/block_3.png',
    'Второй пост',
    150,
    '2026-04-08 18:20:00'
);