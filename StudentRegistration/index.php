<html>
<head><title>Student Registration</title></head>
<body style="background-color:#99ccff;">
<h1>Welcome to the Student Registration System!</h1>

1) <a href="odbc_insert_student.php">Add a student to the Student table.</a><br>
2) <a href="odbc_insert_course.php">Add a course to the Course table.</a><br>
3) <a href="odbc_insert_enrollment.php">Add an application to the Enrollment table.</a><br>
4) <a href="odbc_select_students.php">View all students.</a><br>
5) <a href="odbc_select_deptCourses.php">View all courses for a given department.</a><br>
6) <a href="odbc_select_studentCourses.php">View all courses for a given student.</a><br>
7) <a href="index.php?reinitialize=true">Reinitialize database.</a>

<?php 
	if (isset($_GET['reinitialize'])) {
	    $config = include('config.php');
		$command = $config['path'] . 'odbc_reinitialize.exe';
		
    	// remove dangerous characters from command to protect web server
    	$command = escapeshellcmd($command);
 
    	// run odbc_reinitialize.exe
    	system($command);
	}
?>
</body>
</html>
