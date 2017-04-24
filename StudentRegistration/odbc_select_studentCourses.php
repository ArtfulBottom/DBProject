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

th {
	background-color: #ffffff;
}

tr:nth-child(odd) {
	background-color: #dddddd;
}

tr:nth-child(even) {
	background-color: #ffffff;
}
</style>
<body style="background-color:#99ccff;">
<h1>Enter a Student ID to obtain their enrolled course information:</h1>

<form action="odbc_select_studentCourses.php" method="post">
    Enter a Student ID: <input type="text" name="studentId" required><br><br>
    <input name="Submit" type="submit">
</form>

<a href="../StudentRegistration">Back to home page.</a>
<br><br>

<?php
	if (isset($_POST['studentId'])) {
		$config = include('config.php');
    	$command = $config['path'] . 'odbc_select_studentCourses.exe ' . $_POST['studentId']; 

		// remove dangerous characters from command to protect web server
		$command = escapeshellcmd($command);
 
		// run odbc_select_studentCourses.exe
		system($command);    
	}       
?>

</body>
</html>
