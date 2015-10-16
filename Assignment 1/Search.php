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


    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['title']. "</td>" . " " . "<td>" . $row['description'] . "</td>";
//        echo "<br />";
        echo "</tr>";
    }

    //Do this after you are finished executing all of your commands on MySQL
    mysqli_close($db);
    ?>
    <?php
    $search = $_POST['search'];
    //Selecting and Displaying Data from a MySQL DB using MySQLi
    $result = mysqli_query($db,"SELECT * FROM employees WHERE description LIKE '%$search%' LIMIT $recordsPerPage");

    if(!$result)
    {
        die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['emp_no']. "</td>" . " " . "<td>" . $row['birth_date']. "</td>" . " " . "<td>" . $row['first_name'] . "</td>" . "<td>" . $row['last_name']. "</td>" . "<td>" . $row['gender']. "</td>" . "<td>" . $row['hire_date']. "</td>" . "<td><button>Edit</button></td>" . "<td><button></button>Delete</td>";
        echo "</tr>";
    }

    //Do this after you are finished executing all of your commands on MySQL
    mysqli_close($db);
    ?>

    </tbody>
</table>
</body>
</html>



