-- must execute this first:
-- source /home/mrh/www/http_public/fauxproj/sql

-- ref1 : 
use mrh_app;

CREATE table user if not exists Users(
    u_id integer primary key not null,
    email varchar(255) not null,
    password CHAR(60), -- bcrypt hash from php
    CONSTRAINT unique (email)
);


-- add default guest user with password as mysql hash of "Guest123"
INSERT into Users(email,password)
VALUES("guest@localhost",hash("Guest123"));