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

   // Read command line arguments
   // First arg, arg[0] is the name of the program
   // Next args are the parameters
   string studentId = argv[1];
   string name = argv[2];
   string major = argv[3];
 
   // Insert the new restaurant
   string input = "'" + studentId + "','" + name + "','" + major + "'";               
   myDB.insert("Student", input);    // insert new restaurant
       
   myDB.disConnect();//disconect Database

   return 0;
}


