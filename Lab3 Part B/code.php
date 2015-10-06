<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/5/15
 * Time: 8:09 PM
 */


require_once('dbConn.php');
$db = getDBConnection();

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];

//Selecting and Displaying Data from a MySQL DB using MySQLi
mysqli_query($db,"INSERT INTO actor (first_name, last_name) VALUES ('$firstName', '$lastName');");
?>

<html>
<head>
    <style type="text/css">
    table,th,td,tr {
    border: 1px solid black;
        }
        th{
    background-color: #B6B5BF;
        }
        button {
    width: 90px;
            margin: 20px;
        }
    </style>
</head>
<body>

<table>
    <thead>
    <tr>
        <th>Actor ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $result = mysqli_query($db,"SELECT * FROM actor ORDER BY actor_id DESC LIMIT 10");
if(!$result)
{
    die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
}

while ($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['actor_id']. "</td>" . " " . "<td>" . $row['first_name']. "</td>" . " " . "<td>" . $row['last_name'] . "</td>";

    echo "</tr>";
}


//Do this after you are finished executing all of your commands on MySQL
mysqli_close($db);
    ?>
</tbody>
</table>
<form action="delete.php" method="post" enctype="multipart/form-data">
    ID to delete: <br/>
    <input type="text" name="delete"> <br/>
    <input type="submit" value="Submit" name="submit">
</form>
<form action="update.php" method="post" enctype="multipart/form-data">
    ID to update: <br/>
    <input type="text" name="update"> <br/>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

