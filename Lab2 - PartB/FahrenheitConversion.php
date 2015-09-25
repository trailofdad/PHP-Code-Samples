<?php

function conversion(){

    for($i=0;$i<=100;$i++)
    {
        print $i . " degree(s) fahrenheit equals " . (($i-32)*(5/9)) . " degree(s) Celsius <br/>";
    }
}

conversion();