<html>
<head><title>Insert Student</title></head>
<body>
<h1>Enter information about a student to add to the database:</h1>

<form action="odbc_insert_student.php" method="post">
    Student ID: <input type="text" name="studentId" required><br>
    Name: <input type="text" name="name" required><br>
    Major: <input type="text" name="major" required><br><br>
    <input name="Submit" type="submit">
</form>
<a href="../StudentRegistration">Back to home page.</a>
<br><br>

</body>
</html>

<?php
	if (isset($_POST['Submit'])) {
		if (!isValidId()) {
			die('<br><font color="red">ERROR: The Student ID must contain only numbers.</font>');
		}
		
		// replace ' ' with '\ ' in the strings so they are treated as single command line args
		$studentId = escapeshellarg($_POST[studentId]);
		$name = escapeshellarg($_POST[name]);
		$major = escapeshellarg($_POST[major]);

		$command = '/home/ls008/public_html/StudentRegistration/odbc_insert_student.exe ' 
				   . $studentId . ' ' . $name . ' ' . $major;

		// remove dangerous characters from command to protect web server
		$command = escapeshellcmd($command);
	 
		// run odbc_insert_student.exe
		system($command);     
	}

	function isValidId() {
		$str = $_POST['studentId'];
		$len = strlen($str);
		
		for ($i = 0; $i < $len; $i++) {
			if(!is_numeric($str[$i])) {
				return false;
			}
		}
		return true;
	}
?>


