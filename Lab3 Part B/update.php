<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/5/15
 * Time: 9:05 PM
 */
require_once('dbConn.php');
$db = getDBConnection();

$updateId = $_POST['update'];
$firstName = mysqli_query($db,"SELECT first_name FROM actor WHERE actor_id=$updateId;");
$lastName = mysqli_query($db,"SELECT first_name FROM actor WHERE actor_id=$updateId;");
?>

<form action="updateHandler.php" method="post" enctype="multipart/form-data">
First Name: <br/>
<input type="text" name="firstname"> <br/>
    Last Name: <br/>
    <input type="text" name="lastname"> <br/>
    <input type="submit" value="Update" name="submit">
</form>

