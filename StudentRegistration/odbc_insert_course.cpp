/* Compile using:
g++ -Wall -I/usr/include/cppconn -o odbc odbc_insert_restaurant.cpp -L/usr/lib -lmysqlcppconn 
run: 
./odbc */
#include "odbc_db.h"
#include <iostream>
#include <string>
using namespace std;

int main(int argc, char *argv[])
{
   odbc_db myDB;
   myDB.Connect();
 
   // For debugging purposes:  Show the database before insert
   string builder = "";
   string query1 = "SELECT * from Course;";
   builder.append("<br><br><br> Course table before:" + myDB.query(query1) +"<br>");

   // Read command line arguments
   // First arg, arg[0] is the name of the program
   // Next args are the parameters
   string deptCode = argv[1];
   string courseNum = argv[2];
   string title = argv[3];
   string creditHours = argv[4];
 
   // Insert the new course
   string input = "'" + deptCode + "','" + courseNum + "','" + title + "','" + creditHours + "'";               
   myDB.insert("Course", input);    // insert new restaurant
 
   //For debugging purposes: Show the database after insert
   builder.append("<br><br><br> Course table after:" + myDB.query(query1));
   cout << builder; 
       
   myDB.disConnect();//disconect Database

   return 0;
}


