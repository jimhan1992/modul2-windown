CREATE DATABASE blog_21
 CREATE TABLE posts(
     id int primary key AUTO_INCREMENT,
     title varchar(255),
     teaser varchar(500),
     content LONGTEXT,
     created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
 )
 INSERT INTO posts (title, teaser,content) VALUES ("tam su dem khuya","sdfhsdjfgsajfg","chua")
