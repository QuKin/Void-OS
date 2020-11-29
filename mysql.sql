show databases;
create database webos;
use webos;
# 登录账号
create table login(
	id int primary key auto_increment,
	username varchar(60) not null,
	password varchar(200) not null
);
# insert into login(username,password) values('admin','a723c2d26cd9dc8eb8b69d375d163abf');
# 电话
create table tel(
    id int primary key auto_increment,
    username varchar(100) not null,
    tel varchar(20) not null
);
# insert into tel(username,tel) values('Admin','88888888888'),('QuKin','66666666666');
