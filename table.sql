/*
Navicat MySQL Data Transfer
Source Host	    : localhost:8080
Source Database : databTulkurSHH
Target Host 	: localhost:8080
Target Database : databTulkurSHH
*/

DROP TABLE IF EXISTS 'tblNotandi';
CREATE TABLE 'tblNotandi'(
	'ID_user' int NOT NULL auto_increment,
	'User_kt' int NOT NULL,
	'Username' varchar(100) NOT NULL,
	'Password' varchar(100) NOT NULL,
	PRIMARY KEY ('ID')
);

CREATE TABLE 'tblTulkur'(
	'User_kt' int NOT NULL,
	'Nafn' varchar(255),
	'Simi' varchar(7),
	PRIMARY KEY('User_kt')
);
