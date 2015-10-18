<?php
session_start();
require_once('dbConn.php');
$db = getDBConnection();

$addFirst = $_POST['addFirst'];
$addLast = $_POST['addLast'];
$addBirthDate = $_POST['addBirthDate'];
$addGender = $_POST['addGender'];
$addHireDate = $_POST['addHireDate'];

$sql = "SELECT * FROM employees ORDER BY emp_no DESC LIMIT 1";
$result = mysqli_query($db, $sql);
if(!$result)
{
    die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
}
while ($row = mysqli_fetch_assoc($result)){
    $num = $row['emp_no']+1;
}

$resultInsert = mysqli_query($db,"INSERT INTO employees (emp_no, first_name, last_name, birth_date, gender, hire_date) VALUES ('$num', '$addFirst', '$addLast', '$addBirthDate', '$addGender', '$addHireDate')");

if(!$resultInsert)
{
    die('Could not add records to the Employees Database: ' . mysqli_error($db));
}

$affectedRows = mysqli_affected_rows($db);

echo "<p>Successfully added " . $affectedRows . " record(s)" . "</p>";
echo "<a href='index.php'>Return to Home</a>";

//Do this after you are finished executing all of your commands on MySQL
mysqli_close($db);




