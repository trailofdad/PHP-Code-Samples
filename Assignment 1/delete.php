<?php


require_once('dbConn.php');
$db = getDBConnection();

$deleteId = $_POST['delete'];

mysqli_query($db,"DELETE FROM employees WHERE emp_no='$deleteId';");

$affectedRows = mysqli_affected_rows($db);

echo "<p>Successfully deleted " . $affectedRows . "record(s)" . "</p>";
echo "<a href='index.php'>Return to Home</a>";