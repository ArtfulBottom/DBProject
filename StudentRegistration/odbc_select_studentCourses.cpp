#include "odbc_db.h"
#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
	odbc_db myDB;
	myDB.Connect();
	
	string studentId = argv[1];
	
	string q = "SELECT * FROM Student WHERE Student.StudentId = " + studentId + " GROUP BY ;
	cout << myDB.query(q);

	myDB.disConnect();
	
	return 0;
}

