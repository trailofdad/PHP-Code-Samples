

<html>
<head>
    <style type="text/css">
        table,th,td,tr {
            border: 1px solid black;
        }

    </style>
</head>
<body>

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