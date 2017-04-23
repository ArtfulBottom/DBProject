<html>
<head><title>View Student Courses</title></head>
<style>
table {
	border-collapse: collapse;
}

td, th {
	border: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
}

tr:nth-child(even) {
	background-color: #dddddd;
}
</style>
<body>
<h1>Student Course Information:</h1>

<form action="odbc_select_studentCourses.php" method="post">
    Student ID: <input type="text" name="studentId" required><br>
    <input name="Submit" type="submit">
</form>

<?php
    $command = '/home/ls008/public_html/StudentRegistration/odbc_select_studentCourses.exe';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_select_students.exe
    system($command);           
?>

<br><a href="../StudentRegistration">Back to home page.</a>

</body>
</html>
