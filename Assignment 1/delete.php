<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/5/15
 * Time: 8:48 PM
 */
require_once('dbConn.php');
$db = getDBConnection();

$deleteId = $_POST['delete'];

mysqli_query($db,"DELETE FROM employees WHERE emp_no='$deleteId';");

$affectedRows = mysqli_affected_rows($db);

echo "<p>Successfully deleted " . $affectedRows . "record(s)" . "</p>";
echo "<a href='code.php'>Return to Actors List</a>";