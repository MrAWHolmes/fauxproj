-- must execute this first:
-- source /home/mrh/www/http_public/fauxproj/sql

-- ref1 : 
use mrh_app;

show tables;

-- exit;
-- Drop added to fix the table defintion!
-- DROP Table Users;

CREATE table  IF NOT EXISTS Users(
    u_id int not null AUTO_INCREMENT,
    email varchar(255) not null,
    password CHAR(60), -- bcrypt hash from php
    PRIMARY KEY (u_id),
    UNIQUE (email)
); 

-- exit;
-- add default guest user with password as mysql hash of "Guest123"
INSERT into Users(email,password)
VALUES("guest@localhost",PASSWORD("Guest123"));

exit;