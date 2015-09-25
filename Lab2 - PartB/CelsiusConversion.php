

<html>
<head>
    <style type="text/css">
        table,th,td,tr {
            border: 1px solid black;
        }
        button {
            width: 90px;
            margin: 20px;
        }
        tr:nth-child(even) {
            background-color: #B6B5BF;
        }
        th{
            background-color: #B6B5BF;
        }
    </style>
</head>
<body>
<form action="http://localhost:63342/Lab2%20-%20PartB/FahrenheitConversion.php">
    <input type="submit" value="Fahrenheit">
</form>
<table>
    <thead>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    </thead>
    <tbody>
    <?php

    for($i=0;$i<=100;$i++)
    {
        echo "<tr>";
        echo "<td>$i</td>";
        $fahrenheit = round(($i*(9/5)) + 32);
        echo "<td>$fahrenheit</td>";
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