<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/5/15
 * Time: 9:15 PM
 */

require_once('dbConn.php');
$db = getDBConnection();

$updateId = $_POST['update'];
$updateFirst = $_POST['updatefirst'];
$updateLast = $_POST['updatelast'];

mysqli_query($db,"UPDATE actor SET first_name='$updateFirst' WHERE actor_id=$updateId;");
mysqli_query($db,"UPDATE actor SET last_name='$updateLast' WHERE actor_id=$updateId;");

$affectedRows = mysqli_affected_rows($db);

echo "<p>Successfully updated " . $affectedRows . "record(s)" . "</p>";
echo "<a href='code.php'>Return to Actors List</a>";