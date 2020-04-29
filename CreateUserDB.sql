drop database if exists `User_Info`;
create database `User_Info`;
use `User_Info`;

CREATE TABLE login_info (
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    email VARCHAR(30),
    password VARCHAR(28)
);
 insert into login_info values ('Ben','Carter','Bcarter46@student.gsu.edu','password');
 insert into login_info values ('Jaiana','Butler','jbutler38@student.gsu.edu','password');
 insert into login_info values ('Hiba','Khan','hkhan14@student.gsu.edu','password');
 insert into login_info values ('John','Doan','johndoan@computer.org','password');
 insert into login_info values ('Adewale','Oduyemi','aoduyemi1@student.gsu.edu','password');
create table recipes ( 
name varchar(25),
 instructions varchar(2000)
);
insert into recipes values('pizza','Spread dough evenly. apply sauce, apply cheese, apply toppings, bake at 400 for 13 minutes');
SELECT * FROM login_info;
select * from recipes; 
