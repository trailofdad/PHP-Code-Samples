<?php

echo "Your first name is: " . $_POST["firstname"] . "<br/>";
echo "Your last name is: " . $_POST["lastname"] . "<br/>";
echo "Your height in metres is: " . (($_POST["feet"]*12) + $_POST["inches"])*0.0254;
