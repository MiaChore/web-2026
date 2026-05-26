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
  <?php

    $images = [];
    if (!empty($post['post_pic'])) {
      $images[] = $post['post_pic'];
    }
    if (!empty($post['post_pic2'])) {
      $images[] = $post['post_pic2'];
    }
    if (!empty($post['post_pic3'])) {
      $images[] = $post['post_pic3'];
    }

  ?>
  
  <div class="slider_container">
    
    <?php foreach ($images as $index => $image): ?>

      <img 
        src="<?= $image ?>"
        alt="Фото поста"
        class="photo_post slide"
        style="<?= $index !== 0 ? 'display: none;' : '' ?>"
      >

    <?php endforeach; ?>
    
    <?php if (count($images) > 1): ?>

        <button class="arrow left_arrow">‹</button>

        <button class="arrow right_arrow">›</button>

        <div class="photo_counter">
          1/<?= count($images) ?>
        </div>

    <?php endif; ?>
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
    <p class="post_text">
      <?= $post['description'] ?>
    </p>
    <button class="more_button">
      Ещё
    </button>
    <p class="comments description">
      <?= getTimeAgo($post['post_time']) ?>
    </p>
  </div>
</div>