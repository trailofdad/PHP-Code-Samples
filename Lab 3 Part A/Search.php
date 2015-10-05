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
        <th>Film</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $db = mysqli_connect("localhost","root", "inet2005","sakila");
    if (!$db)
    {
        die('Could not connect to the Sakila Database: ' . mysqli_error($db));
    }

    $search = $_POST['search'];
    //Selecting and Displaying Data from a MySQL DB using MySQLi
    $result = mysqli_query($db,"SELECT * FROM film WHERE description LIKE '%$search%'");
    if(!$result)
    {
        die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['title']. "</td>" . " " . "<td>" . $row['description'] . "</td>";
        echo "<br />";
        echo "</tr>";
    }

    //Do this after you are finished executing all of your commands on MySQL
    mysqli_close($db);
    ?>
    </tbody>
</table>

</body>
</html>

