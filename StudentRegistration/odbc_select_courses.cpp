#include "odbc_db.h"
#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
	odbc_db myDB;
	myDB.Connect();

	string q = "";
	if( argc == 1) {	//No department specified, return list of departments
		q = "SELECT DISTINCT DeptCode FROM Course;";
	} else {	//Return courses from specified department
		string dept = argv[1];
		q = "SELECT * FROM Course WHERE DeptCode = " + dept + ";";
	}

	cout << myDB.query(q);

	myDB.disConnect();
	
	return 0;
}
