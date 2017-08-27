/*
Navicat MySQL Data Transfer
Source Host	    : localhost:8080
Source Database : databTulkurSHH
Target Host 	: localhost:8080
Target Database : databTulkurSHH
*/

DROP TABLE IF EXISTS 'tblNotandi';
CREATE TABLE 'tblNotandi'(
	'ID' int NOT NULL auto_increment,
	'Name' varchar(60) NOT NULL,
	'Email' varchar(60) NOT NULL,
	'Password' varchar(255) NOT NULL,
	PRIMARY KEY ('ID')
	);
