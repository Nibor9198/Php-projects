create database forum;
use forum;

create table user(
Id integer auto_increment primary key not null,
uname varchar(50),
passwrd varchar(255),
name varchar(50)
);
create table thread(
Id integer auto_increment primary key not null,
title varchar(50),
content text,
uid integer,
FOREIGN KEY(uid) REFERENCES user(Id)
);

create table post(
Id integer auto_increment primary key not null,
content text,
uid integer,
thid integer,
FOREIGN KEY(uid) REFERENCES user(Id),
FOREIGN KEY(thid) REFERENCES thread(Id)
);
create table category(
Id integer auto_increment primary key not null,
name varchar(50),
descr text
);
create table bcategory(
cid integer,
thid integer,
FOREIGN KEY(cid) REFERENCES category(Id),
FOREIGN KEY(thid) REFERENCES thread(Id)
);