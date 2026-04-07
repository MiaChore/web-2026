<div style="width: 474px; height: 700px;">
  <div class="user_bar">
    <img src="<?= $post['user-photo'] ?>" alt="<?= $post['author'] ?>" 
    class="user_photo">
    <h2 class="nickname"><a nick= '<?= $post['author'] ?>' 
    href='/post?id=<?= $post['id'] ?>'>
    <?= $post['author'] ?></h2>
    </a>
    <img src="../../media/pen.svg" alt="Edit" class="icons pen">
  </div>
  <div>
    <img src="<?= $post['post-photo'] ?>" alt="<?= $post['alt-post-name'] ?>" class="photo_post">
  </div> 
  <div class="react_border">
    <img src="../../media/like.png" alt="Likes" class="react_border likes">
    <h2 class="react_border counter"><?= $post['likes'] ?></h2>    
  </div>
  <div>
    <h3 class="comments"><?= $post['subtitle'] ?></h3>
    <h3 class="comments description">ещё</h3>
    <h3 class="comments description"><?= $post['post-time'] ?></h3>
  </div>
</div>