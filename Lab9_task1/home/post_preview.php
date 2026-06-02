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
      alt="Редактировать"
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
  <div class="react_border like_button" data-post-id="<?= $post['id_post'] ?>">
    <img
      src="../../media/like.png"
      alt="Лайки"
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