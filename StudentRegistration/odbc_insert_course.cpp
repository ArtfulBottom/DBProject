/* Compile using:
g++ -Wall -I/usr/include/cppconn -o odbc odbc_insert_restaurant.cpp -L/usr/lib -lmysqlcppconn 
run: 
./odbc */
#include "odbc_db.h"
#include <iostream>
#include <string>
using namespace std;

int main(int argc, char *argv[]) {
	odbc_db myDB;
	myDB.Connect();

	// Read command line arguments
	// First arg, arg[0] is the name of the program
	// Next args are the parameters
	string deptCode = argv[1];
	string courseNum = argv[2];
	string title = argv[3];
	string creditHours = argv[4];

	// Insert the new course
	try {
		string input = "'" + deptCode + "','" + courseNum + "','" + title + "','" + creditHours + "'";               
		myDB.insert("Course", input);    // insert new course.
		cout << "Course data successfully entered.";
	} catch (sql::SQLException &e) { 
		cout << "<font color='red'>ERROR: Department code and course number already exist.</font>";
	}
	   
	myDB.disConnect();//disconect Database

	return 0;
}


