<div class="post_block">
  <div class="user_bar">
    <img 
      src="<?= $post['pfp'] ?>"
      alt="<?= $post['nickname'] ?>"
      class="user_photo"
    >
    <h2 class="nickname">
      <a href="/user?id=<?= $post['user_id'] ?>">
        <?= $post['nickname'] ?>
      </a>
    </h2>
    <img
      src="../../media/pen.svg"
      alt="Edit"
      class="icons pen"
    >
  </div>
  <div>
    <img
      src="<?= $post['post_pic'] ?>"
      alt="Post image"
      class="photo_post"
    >
  </div>
  <div class="react_border">
    <img
      src="../../media/like.png"
      alt="Likes"
      class="react_border likes"
    >
    <h2 class="react_border counter">
      <?= $post['like_amount'] ?>
    </h2>
  </div>
  <div class="bottom_text">
    <span class="post_text">
      <?= $post['description'] ?>
    </span>
    <button class="more_button">
      Ещё
    </button>
    <div class="post_date"> 
      <?= getTimeAgo($post['post_time']) ?>
    </div>
  </div>
</div>