#!/bin/bash
set -e -v

g++ -Wall -I/usr/include/cppconn -o odbc_insert_student.exe odbc_insert_student.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
g++ -Wall -I/usr/include/cppconn -o odbc_select_students.exe odbc_select_students.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
g++ -Wall -I/usr/include/cppconn -o odbc_insert_course.exe odbc_insert_course.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
g++ -Wall -I/usr/include/cppconn -o odbc_insert_enrollment.exe odbc_insert_enrollment.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
g++ -Wall -I/usr/include/cppconn -o odbc_select_studentCourses.exe odbc_select_studentCourses.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
g++ -Wall -I/usr/include/cppconn -o odbc_select_deptCourses.exe odbc_select_deptCourses.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
g++ -Wall -I/usr/include/cppconn -o odbc_reinitialize.exe odbc_reinitialize.cpp odbc_db.cpp -L/usr/lib -lmysqlcppconn
