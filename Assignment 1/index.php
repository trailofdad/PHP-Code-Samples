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
                echo "<td>" . $row['emp_no']. "</td>" . " " . "<td>" . $row['birth_date']. "</td>" . " " . "<td>" . $row['first_name'] . "</td>" . "<td>" . $row['last_name']. "</td>" . "<td>" . $row['gender']. "</td>" . "<td>" . $row['hire_date']. "</td>" . "<td><button>Edit</button></td>" . "<td><button>Delete</button></td>";
                echo "</tr>";
            }

            //Do this after you are finished executing all of your commands on MySQL
                mysqli_close($db);
        ?>

        </tbody>
    </table>
    <?php
    echo "<p>Add a record to the database:</p><br/>";
    echo "<form action='add.php' method='post' enctype='multipart/form-data'>";
        echo "First Name: <br/>";
        echo "<input type='text' name='addfirst'> <br/>";
        echo "Last Name: <br/>";
        echo "<input type='text' name='addlast'> <br/>";
        echo "Birth Date: <br/>";
        echo "<input type='text' name='addBirthDate'> <br/>";
        echo "Gender: <br/>";
        echo "<input type='text' name='addGender'> <br/>";
        echo "Hire Date: <br/>";
        echo "<input type='text' name='addHireDate'> <br/>";
        echo "<input type='submit' value='add' name='submit'>";
        echo "</form>";
    ?>


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

