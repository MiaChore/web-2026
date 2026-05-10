CREATE TABLE `blog1`.`user` (
  `user_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nickname` VARCHAR(45) NULL,
  `pfp` VARCHAR(200) NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `user_id_UNIQUE` (`user_id` ASC) VISIBLE,
  UNIQUE INDEX `nickname_UNIQUE` (`nickname` ASC) VISIBLE);

CREATE TABLE `blog1`.`post` (
  `id_post` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` INT UNSIGNED NOT NULL,
  `post_pic` VARCHAR(200) NULL,
  `description` VARCHAR(200) NULL,
  `like_amount` INT UNSIGNED NULL,
  `post_time` DATETIME NOT NULL,
  PRIMARY KEY (`id_post`),
  UNIQUE INDEX `id_post_UNIQUE` (`id_post` ASC) VISIBLE);