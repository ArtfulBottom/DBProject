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
<h1>View Student Course Information:</h1>

<?php
	$command = '/home/ls008/public_html/StudentRegistration/odbc_select_studentCourses.exe';
		
	// remove dangerous characters from command to protect web server
	$command = escapeshellcmd($command);

	// run odbc_select_students.exe
	system($command);         
?>

<br>
<form action="odbc_select_studentCourses.php" method="post">
    Enter a Student ID: <input type="text" name="studentId" required><br><br>
    <input name="Submit" type="submit">
</form>

<?php
	if (isset($_POST['studentId'])) {
    	$command = '/home/ls008/public_html/StudentRegistration/odbc_select_studentCourses.exe '
    	   		   . $_POST['studentId']; 

		// remove dangerous characters from command to protect web server
		$command = escapeshellcmd($command);
 
		// run odbc_select_studentCourses.exe
		system($command);    
	}       
?>

<br><a href="../StudentRegistration">Back to home page.</a>

</body>
</html>