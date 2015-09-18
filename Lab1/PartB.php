<html>

<head></head>

<body>

<?php

echo "<h1>Greetings from the lab</h1>";

?>

<p>
    <?php
        echo "<h3>BRRRRAAAAAAAPPPP</h3>";
    ?>
</p>
<p>
    <?php
        $myName = "Christian";
        echo "My name is " . $myName;
    ?>
</p>
<p>
    <?php
        $stringOne = "This is string one";
        $stringTwo = "and this is string two.";
        $concat = $stringOne . " " . $stringTwo;
        echo $concat;
    ?>
</p>

<p>
    <?php
        $a = (32 * 14) + 83;
        echo $a;
    ?>
</p>

<p>
    <?php
        $b = (1024 / 128) - 7;
        echo $b;
    ?>
</p>

<p>
    <?php
    $c = 769 % 6;
    echo $c;
    ?>
</p>

<p>
    <?php
        $counter = 10;
        while($counter>0)
        {
            echo $counter."...";
            $counter--;
        }
        echo "Blast Off";
    ?>
</p>

<p>
    <?php
        $colors = array("red", "blue", "green", "yellow", "brown", "orange", "purple");

        for($x=0;$x<7;$x++)
        {
            echo $colors[$x] . " ";
        }

    ?>
</p>

<p>
    <?php
        $colors = array("red", "blue", "green", "yellow", "brown", "orange", "purple");
        foreach($colors as $display)
        {
            echo $display . " ";
        }
    ?>
</p>

<p>
    <?php
        $colors = array("red", "blue", "green", "yellow", "brown", "orange", "purple");
        var_dump($colors);
    ?>
</p>

</body>

</html>

