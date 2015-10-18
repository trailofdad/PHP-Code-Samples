
session_start();
<html>
<head>
</head>
<body>
<?php

require_once('dbConn.php');
$db = getDBConnection();

$updateId = $_POST['update'];
$result = mysqli_query($db,"SELECT * FROM employees WHERE emp_no='$updateId';");
$row = mysqli_fetch_assoc($result);
$firstName = $row['first_name'];
$lastName = $row['last_name'];
$birthDate = $row['birth_date'];
$gender = $row['gender'];
$hireDate = $row['hire_date'];

echo "<form action='updateHandler.php' method='post' enctype='multipart/form-data'>";
    echo "First Name: <br/>";
    echo "<input type='text' name='updatefirst' value='$firstName'> <br/>";
    echo "Last Name: <br/>";
    echo "<input type='text' name='updatelast' value='$lastName'> <br/>";
    echo "Birth Date: <br/>";
    echo "<input type='text' name='updatebirthdate' value='$birthDate'> <br/>";
    echo "Gender: <br/>";
    echo "<input type='text' name='updategender' value='$gender'> <br/>";
    echo "Hire Date: <br/>";
    echo "<input type='text' name='updatehiredate' value='$hireDate'> <br/>";
    echo "<input type='submit' value='Update' name='submit'>";
    echo "<input type='hidden' name='update' value='$updateId'>";
    echo "</form>";

    //Do this after you are finished executing all of your commands on MySQL
    mysqli_close($db);
?>
</body>
</html>






