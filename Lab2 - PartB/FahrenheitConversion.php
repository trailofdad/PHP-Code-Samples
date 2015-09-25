

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
<form action="http://localhost:63342/Lab2%20-%20PartB/CelsiusConversion.php">
    <input type="submit" value="Celsius">
</form>
<table>
    <thead>
        <tr>
            <th>Fahrenheit</th>
            <th>Celsius</th>
        </tr>
    </thead>
    <tbody>
        <?php

            for($i=0;$i<=100;$i++)
            {
                echo "<tr>";
                echo "<td>$i</td>";
                $celsius = ($i-32)*(5/9);
                echo "<td>$celsius</td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>


</body>
</html>