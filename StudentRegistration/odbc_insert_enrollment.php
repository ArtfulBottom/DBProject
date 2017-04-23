<html>
<head><title>Insert Student</title></head>
<body>
<h1>Enter information about an enrollment to add to the database:</h1>

<form action="odbc_insert_enrollment.php" method="post">
    Student ID: <input type="text" name="studentId" required><br>
    Department Code: <input type="text" name="deptCode" required><br>
    Course number: <input type="text" name="courseNum" required><br><br>
    <input name="Submit" type="submit">
</form>
<a href="../StudentRegistration">Back to home page.</a>
<br><br>

</body>
</html>

<?php
if (isset($_POST['Submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $studentId = escapeshellarg($_POST[studentId]);
    $deptCode = escapeshellarg($_POST[deptCode]);
    $courseNum = escapeshellarg($_POST[courseNum]);

    $command = '/home/ls008/public_html/StudentRegistration/odbc_insert_enrollment.exe ' 
    		   . $studentId . ' ' . $deptCode . ' ' . $courseNum;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_insert_student.exe
    system($command);       
}
?>
