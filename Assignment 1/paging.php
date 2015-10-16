<?php

$recordsPerPage = 25;

session_start();

if (isset($_POST['nextpage']))
{
    $_SESSION["pagenumber"] += $recordsPerPage;
}
else if (isset($_POST['lastpage']) && $_SESSION["pagenumber"] > 25)
{
    $_SESSION["pagenumber"] -= $recordsPerPage;
}


//connect to database
require_once('dbConn.php');
$db = getDBConnection();
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
        <th>Emp. Number</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $result = mysqli_query($db,"SELECT * FROM employees ORDER BY emp_no DESC LIMIT {$_SESSION['pagenumber']}, $recordsPerPage");
    if(!$result)
    {
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['emp_no']. "</td>" . " " . "<td>" . $row['birth_date']. "</td>" . " " . "<td>" . $row['first_name'] . "</td>" . "<td>" . $row['last_name']. "</td>" . "<td>" . $row['gender']. "</td>" . "<td>" . $row['hire_date']. "</td>" . "<td><button>Edit</button></td>" . "<td><button>Delete</button></td>";
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

<form action="paging.php" method="post" enctype="multipart/form-data">
    <button type="submit" name="lastpage">last page</button>
    <button type="submit" name="nextpage">next page</button>
</form>

</body>
</html>

