#include "odbc_db.h"
#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
	odbc_db myDB;
	myDB.Connect();

	//Return student course information from specified studentId
	string studentId = argv[1];
	
	string q = "SELECT Course.DeptCode, Course.CourseNum, Course.Title, Course.CreditHours ";
	q += "FROM Student NATURAL JOIN Enrollment NATURAL JOIN Course ";
	q += "WHERE Student.StudentId = " + studentId + " ";
	q += "ORDER BY Course.DeptCode, Course.CourseNum";
	
	try {
		cout << myDB.query(q);
	} catch (sql::SQLException &e) {
		cout << "<font color='red'>ERROR: Please enter a valid Student ID.</font><br>";
	}

	myDB.disConnect();
	
	return 0;
}

