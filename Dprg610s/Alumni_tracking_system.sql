CREATE DATABASE ALUMNI_TRACKING_SYSTEM;
GO

USE ALUMNI_TRACKING_SYSTEM;

CREATE TABLE FORM1(
ID int NOT NULL,
user_name CHAR(25),
Last_name CHAR(25),
name_Last_user  CHAR(25),
Statut  VARCHAR(25),
user_password  bigint);


ALTER TABLE FORM1
Drop column name_Last_user



SELECT* FROM FORM1  
