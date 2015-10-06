

<html>
<head>
</head>
<body>
<?php

require_once('dbConn.php');
$db = getDBConnection();

$updateId = $_POST['update'];
$result = mysqli_query($db,"SELECT * FROM actor WHERE actor_id='$updateId';");
$row = mysqli_fetch_assoc($result);
$firstName = $row['first_name'];
$lastName = $row['last_name'];

echo "<form action='updateHandler.php' method='post' enctype='multipart/form-data'>";
    echo "First Name: <br/>";
    echo "<input type='text' name='updatefirst' value='$firstName'> <br/>";
    echo "Last Name: <br/>";
    echo "<input type='text' name='updatelast' value='$lastName'> <br/>";
    echo "<input type='submit' value='Update' name='submit'>";
    echo "<input type='hidden' name='update' value='$updateId'>";
    echo "</form>";
?>
</body>
</html>






