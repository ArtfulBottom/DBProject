<html>
<head><title>Insert Course</title></head>
<body>
<h1>Enter information about a course to add to the database:</h1>

<form action="odbc_insert_course.php" method="post">
    Department code: <input type="text" name="deptCode" required><br>
    Course number: <input type="text" name="courseNum" required><br>
    Course title: <input type="text" name="title" required><br>
    Credit hours: <input type="number" name="hours" min="0" required><br><br>
    <input name="Submit" type="submit">
</form>
<a href="../StudentRegistration">Back to home page.</a>
<br><br>

</body>
</html>

<?php
if (isset($_POST['Submit'])) 
{
	if( !is_numeric($_POST[hours]) ) {
		die("Hours:" . $_POST[hours] . " Hours must be a number!");
	}

    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $deptCode = escapeshellarg($_POST[deptCode]);
    $courseNum = escapeshellarg($_POST[courseNum]);
    $title = escapeshellarg($_POST[title]);
    $hours = escapeshellarg($_POST[hours]);

    $command = '/home/ls008/public_html/StudentRegistration/odbc_insert_course.exe ' . $deptCode . ' ' . $courseNum . ' ' . $title . ' ' . $hours;
    echo '<p>' . 'command: ' . $command . '<p>';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_insert_student.exe
    system($command);           
}
?>


