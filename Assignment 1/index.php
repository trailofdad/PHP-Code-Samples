<?php

$recordsPerPage = 25;
session_start();
$_SESSION["pagenumber"] = 0;

//connect to database
require_once('dbConn.php');
$db = getDBConnection();
?>

<html>
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>
    <body>
    <p>Search First & Last Names From Database:</p>
    <form action="Search.php" method="post" enctype="multipart/form-data">
        Search:
        <input type="text" name="search"> <br/><br/>
        <input type="submit" value="Submit Query" name="submit">
    </form>
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
                echo "<td>" . $row['emp_no']. "</td>" . " " . "<td>" . $row['birth_date']. "</td>" . " " . "<td>" . $row['first_name'] . "</td>" . "<td>" . $row['last_name']. "</td>" . "<td>" . $row['gender']. "</td>" . "<td>" . $row['hire_date']. "</td>" . "<td><form action='update.php' method='post' enctype='multipart/form-data'><button class='edit'><input class='edit' type='hidden' name='update' value='" . $row['emp_no']. "'></button></form></td>" . "<td><form action='delete.php' method='post' enctype='multipart/form-data'><button class='delete'><input class='delete' type='hidden' name='delete' value='" . $row['emp_no'] . "'></button></form></td>";
                echo "</tr>";
            }

            //Do this after you are finished executing all of your commands on MySQL
                mysqli_close($db);
        ?>

        </tbody>
    </table>

    <form action="add.php" method="post" enctype="multipart/form-data">
        <button type="submit" name="add">Add Record</button>
    </form>


    <form action="paging.php" method="post" enctype="multipart/form-data">
    <button type="submit" name="lastpage">last page</button>
    <button type="submit" name="nextpage">next page</button>
    </form>

    </body>
</html>

