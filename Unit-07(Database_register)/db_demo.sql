create database php_db;
use php_db;

create table users(
	id int primary key auto_increment,
    user varchar(25) unique,
    password  char(255),
    reg_date datetime default current_timestamp
);

select * FROM users;