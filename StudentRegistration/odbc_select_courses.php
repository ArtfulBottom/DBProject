<html>
<head><title>View Students</title></head>
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
<h1>All Student Information:</h1>
<?php
    $command = '/home/ls008/public_html/StudentRegistration/odbc_select_courses.exe';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_select_students.exe
    system($command);           
?>

<form action="odbc_select_courses.php" method="post">
    Department code: <input type="text" name="deptCode" required><br>
    <input name="Submit" type="submit">
</form>

<?php
if (isset($_POST['Submit'])) {
    $deptCode = $_POST[deptCode];
    echo '<p>' . $deptCode . '<p>';

    $command = '/home/pwm001/public_html/DBProject/StudentRegistration/odbc_select_courses.exe ' . $deptCode;
    echo '<p>' . 'command: ' . $command . '<p>';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_select_students.exe
    system($command);
}  
?>

<br><a href="../StudentRegistration">Back to home page.</a>

</body>
</html>
