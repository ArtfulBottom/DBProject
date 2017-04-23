<html>
<body>
<h3>Enter information about a restaurant to add to the database:</h3>

<form action="odbc_insert_student.php" method="post">
    Student ID: <input type="text" name="studentId"><br>
    Name: <input type="text" name="name"><br>
    Major: <input type="text" name="major"><br>
    <input name="Submit" type="submit" >
</form>
<br><br>

</body>
</html>

<?php
if (isset($_POST['Submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $studentId = escapeshellarg($_POST[studentId]);
    $name = escapeshellarg($_POST[name]);
    $major = escapeshellarg($_POST[major]);

    $command = '/home/ls008/public_html/DBProject/odbc_insert_student.exe ' . $studentId . ' ' . $name . ' ' . $major;
    echo '<p>' . 'command: ' . $command . '<p>';

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // run odbc_insert_student.exe
    system($command);           
}
?>

