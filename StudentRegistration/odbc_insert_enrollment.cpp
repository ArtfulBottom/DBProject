#include "odbc_db.h"
#include <iostream>
#include <string>
using namespace std;

int main(int argc, char *argv[])
{
	odbc_db myDB;
	myDB.Connect();

	// Read command line arguments
	// First arg, arg[0] is the name of the program
	// Next args are the parameters
	string studentId = argv[1];
	string deptCode = argv[2];
	string courseNum = argv[3];

	// Insert the new enrollment data
	try {  
		string input = "'" + studentId + "','" + deptCode + "','" + courseNum + "'";            
		myDB.insert("Enrollment", input);    // insert new enrollment data
		cout << "Enrollment data successfully entered.";
	} catch (sql::SQLException &e) {
		cout << "<font color='red'>ERROR: Unable to insert enrollment data.<br>"
		     << "Please make sure the Student ID, Deptartment code, and Course number exist.</font>";
	}

	myDB.disConnect();//disconect Database

	return 0;
}
