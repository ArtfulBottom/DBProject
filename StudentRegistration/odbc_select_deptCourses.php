<html>
<head><title>View Department Courses</title></head>
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
<h1>Enter a Department code to obtain its course offerings:</h1>
<?php
	$config = include('config.php');
    $command = $config['path'] . 'odbc_select_deptCourses.exe';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_select_deptCourses.exe
    system($command);           
?>

<br>
<form action="odbc_select_deptCourses.php" method="post">
    Enter a Department code: <input type="text" name="deptCode" required><br><br>
    <input name="Submit" type="submit">
</form>

<a href="../StudentRegistration">Back to home page.</a>
<br><br>

<?php
if (isset($_POST['Submit'])) {
    $deptCode = $_POST['deptCode'];
    $command = $config['path'] . 'odbc_select_deptCourses.exe ' . $deptCode;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_select_deptCourses.exe
    system($command);
}  
?>

</body>
</html>
