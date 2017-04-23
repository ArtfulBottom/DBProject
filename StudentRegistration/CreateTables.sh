#!/bin/bash
# Create Stuent, Course, and Enrollment tables.
mysql -u ls008 -pahri3muS ls008<<EOFMYSQL

CREATE TABLE Student (
StudentId char(9),
StudentName char(50) NOT NULL,
Major char(50) NOT NULL,
PRIMARY KEY (StudentId)
);

CREATE TABLE Course (
DeptCode char(4),
CourseNum char(4),
Title char(50),
CreditHours int,
PRIMARY KEY (DeptCode, CourseNum)
);

CREATE TABLE Enrollment (
StudentId char(9),
DeptCode char(4),
CourseNum char(4),
PRIMARY KEY (StudentId, DeptCode, CourseNum),
FOREIGN KEY (StudentId) REFERENCES Student(StudentId)
	ON DELETE CASCADE,
FOREIGN KEY (DeptCode, CourseNum) REFERENCES Course(DeptCode, CourseNum)
	ON DELETE CASCADE
);

EOFMYSQL
