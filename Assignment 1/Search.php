<?php

$recordsPerPage = 25;
session_start();

$searchText = $_POST['search'];
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
        <p>Search First & Last Names From Database:</p>
        <form action="Search.php" method="post" enctype="multipart/form-data">
            Search:
            <?php echo "<input type='text' name='search' value='$searchText'> <br/><br/>" ?>
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
            $recordsPerPage = 25;

            $search = $_POST['search'];
            //Selecting and Displaying Data from a MySQL DB using MySQLi
            $result = mysqli_query($db,"SELECT * FROM employees WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%' LIMIT $recordsPerPage");

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
        <br/>
        <a href="index.php">Home</a>
    </body>
</html>



