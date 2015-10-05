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
        tr:nth-child(even) {
            background-color: #B6B5BF;
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

    //include file and call db connection function
    require_once('dbConn.php');
    $db = getDBConnection();

    //Selecting and Displaying Data from a MySQL DB using MySQLi
    $result = mysqli_query($db,"SELECT * FROM film LIMIT 0,10");
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
<form action="Search.php" method="post" enctype="multipart/form-data">
    Search: <br/>
    <input type="text" name="search"> <br/>
    <input type="submit" value="Submit Query" name="submit">
</form>

</body>
</html>