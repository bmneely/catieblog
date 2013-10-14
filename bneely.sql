CREATE TABLE user (
  id            INTEGER(16) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  first_name    VARCHAR(256) NOT NULL,
  last_name     VARCHAR(256) NOT NULL,
  email         VARCHAR(256) NOT NULL,
  password      VARCHAR(64) NOT NULL,
  role          INTEGER(1)
);

CREATE TABLE item (
  id            INTEGER(16) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name          VARCHAR(256) NOT NULL,
  description   VARCHAR(512) NOT NULL,
  price_dollars INTEGER(4) NOT NULL DEFAULT 0,
  price_cents   INTEGER(2) NOT NULL DEFAULT 0,
  sold          BOOL NOT NULL DEFAULT 0,
  user_id       INTEGER(16)
);

CREATE TABLE post (
  id            int(16) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title         VARCHAR(256),
  date          DATETIME,        
  summary       VARCHAR(512),
  content       VARCHAR(16384),
  user_id       INTEGER(16)
);

CREATE TABLE comment (
  id            INTEGER(16) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  date          DATETIME NOT NULL,        
  user_id       INTEGER(16) NOT NULL,
  post_id       INTEGER(16) NOT NULL
);

CREATE TABLE post_comment (
  post_id       INTEGER(16) NOT NULL,
  comment_id    INTEGER()
);