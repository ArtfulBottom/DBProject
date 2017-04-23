#include "odbc_db.h"
#include <iostream>
using namespace std;

int main(int argc, char *argv[]) {
	odbc_db myDB;
	myDB.Connect();
	
	string q = "SELECT * FROM Student;";
	cout << myDB.query(q);

	myDB.disConnect();
	
	return 0;
}

