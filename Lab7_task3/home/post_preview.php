<div style="width: 474px; height: 700px;">
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
  <div>
    <p class="comments">
      <?= $post['description'] ?>
    </p>
    <p class="comments description">
      ещё
    </p>
    <p class="comments description">
      <?= getTimeAgo($post['post_time']) ?>
    </p>
  </div>
</div>