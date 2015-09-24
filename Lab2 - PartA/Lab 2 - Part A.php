<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 9/24/15
 * Time: 12:58 PM
 */

function myFunction($string, $number)
{
    if($number <= 6)
    {
        echo "<h$number>$string</h$number>";
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("There is an Error!")';
        echo '</script>';
    }
}
