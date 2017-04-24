<html>
<head><title>Insert Student Enrollment</title></head>
<body style="background-color:#99ccff;">
<h1>Enter information about a student enrollment to add to the database:</h1>

<form action="odbc_insert_enrollment.php" method="post">
    Student ID: <input type="text" name="studentId" required><br>
    Department code: <input type="text" name="deptCode" required><br>
    Course number: <input type="text" name="courseNum" required><br><br>
    <input name="Submit" type="submit">
</form>
<a href="../StudentRegistration">Back to home page.</a>
<br><br>

<?php
if (isset($_POST['Submit'])) {
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $studentId = escapeshellarg($_POST[studentId]);
    $deptCode = escapeshellarg($_POST[deptCode]);
    $courseNum = escapeshellarg($_POST[courseNum]);

	$config = include('config.php');
    $command = $config['path'] . 'odbc_insert_enrollment.exe ' . 
    		   $studentId . ' ' . $deptCode . ' ' . $courseNum;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_insert_enrollment.exe
    system($command);    
}
?>

</body>
</html>
