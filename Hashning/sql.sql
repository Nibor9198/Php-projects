create database Hashning;
use Hashning;
create table User(
	ID integer not null auto_increment primary key,
	Username varchar(50),
	Password varchar(255),
	FullName varchar(50),
	privlige varchar(60)
);
