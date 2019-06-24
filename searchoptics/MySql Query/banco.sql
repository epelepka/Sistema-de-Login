create database server;

use server;

create table users
(
  id_user int
  AUTO_INCREMENT PRIMARY key,
email varchar
  (40) NOT NULL, 
senha varchar
  (32) NOT NULL,
registerdate DATETIME NOT NULL
);

  insert into users
    (email,senha)
  values
    ('pelepkae@gmail.com', md5('123')); 

