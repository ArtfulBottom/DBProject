#!/bin/bash
# Create Stuent, Course, and Enrollment tables.
mysql -u ls008 -pahri3muS ls008<<EOFMYSQL

CREATE TABLE Student (
StudentId char(9) NOT NULL,
StudentName char(50) NOT NULL,
Major char(50) NOT NULL,
PRIMARY KEY (StudentId)
);

CREATE TABLE Course (
DeptCode char(4) NOT NULL,
CourseNum char(4) NOT NULL,
Title char(50) NOT NULL,
CreditHours int NOT NULL,
PRIMARY KEY (DeptCode, CourseNum)
);

CREATE TABLE Enrollment (
StudentId char(9) NOT NULL,
DeptCode char(4) NOT NULL,
CourseNum char(4) NOT NULL,
Semester char(6) NOT NULL,
PRIMARY KEY (StudentId, DeptCode, CourseNum, Semester),
FOREIGN KEY (StudentId) REFERENCES Student(StudentId)
	ON DELETE CASCADE,
FOREIGN KEY (DeptCode, CourseNum) REFERENCES Course(DeptCode, CourseNum)
	ON DELETE CASCADE
);

EOFMYSQL
