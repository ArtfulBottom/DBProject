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
<h1>All Student Information:</h1>
<?php
	$config = include('config.php');
    $command = $config['path'] . 'odbc_select_students.exe';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_select_students.exe
    system($command);           
?>

<br><a href="../StudentRegistration">Back to home page.</a>

</body>
</html>
