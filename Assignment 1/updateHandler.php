<?php
require 'isLoggedIn.php';
checkIfLoggedIn();

session_start();
require_once('dbConn.php');
$db = getDBConnection();

$updateId = $_POST['update'];
$updateFirst = $_POST['updatefirst'];
$updateLast = $_POST['updatelast'];
$updateBirthDate = $_POST['updatebirthdate'];
$updateGender = $_POST['updategender'];
$updateHireDate = $_POST['updatehiredate'];

mysqli_query($db,"UPDATE employees SET first_name='$updateFirst' WHERE emp_no=$updateId;");
mysqli_query($db,"UPDATE employees SET last_name='$updateLast' WHERE emp_no=$updateId;");
mysqli_query($db,"UPDATE employees SET birth_date='$updateBirthDate' WHERE emp_no=$updateId;");
mysqli_query($db,"UPDATE employees SET gender='$updateGender' WHERE emp_no=$updateId;");
mysqli_query($db,"UPDATE employees SET hire_date='$updateHireDate' WHERE emp_no=$updateId;");

$affectedRows = mysqli_affected_rows($db);

echo "<p>Successfully updated " . $affectedRows . " record(s)" . "</p>";
echo "<a href='index.php'>Return to Home</a>";

//Do this after you are finished executing all of your commands on MySQL
mysqli_close($db);