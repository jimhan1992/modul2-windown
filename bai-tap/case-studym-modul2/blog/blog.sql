CREATE
DATABASE blog;
CREATE TABLE `blog`.`users`
(
    `id`        INT         NOT NULL AUTO_INCREMENT,
    `username`  VARCHAR(20) NOT NULL COMMENT 'tên đăng nhập',
    `password`  VARCHAR(20) NOT NULL COMMENT 'mật khẩu',
    `full_name` VARCHAR(50) NOT NULL COMMENT 'tên đầy đủ',
    `level`     INT         NOT NULL DEFAULT '0' COMMENT 'quyền',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `blog`.`categories`
(
    `id`   INT          NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(500) NOT NULL COMMENT 'tên chuyên mục',
    `slug` VARCHAR(500) NOT NULL COMMENT 'tên chuyên mục không dấu',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `blog`.`posts`
(
    `id`          INT          NOT NULL AUTO_INCREMENT,
    `title`       VARCHAR(500) NOT NULL COMMENT 'tiêu đề bài viết',
    `slug`        VARCHAR(500) NOT NULL COMMENT 'tiêu đề không dấu',
    `view_number` INT          NOT NULL COMMENT 'lượt xem',
    `image`       VARCHAR(500) NOT NULL COMMENT 'ảnh',
    `summary`     TEXT         NOT NULL COMMENT 'tóm tắt',
    `content`     LONGTEXT     NOT NULL COMMENT 'nội dung',
    `category_id` INT          NOT NULL COMMENT 'id chuyên mục',
    `user_id`     INT          NOT NULL COMMENT 'id thành viên',
    `date`        DATE         NOT NULL COMMENT 'thời gian đăng',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;


