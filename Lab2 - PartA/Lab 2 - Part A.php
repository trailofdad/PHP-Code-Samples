<?php

//Step 1 Function
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
} //end function

//loop to call function
for ($i = 1;$i < 8;$i++)
{
    myFunction("Hello world!",$i);
}

//Step 2
//function by value
function valueFunction($message)
{
    $message .= "...blah";
}

//function by reference
function referenceFunction(&$message)
{
    $message .= "...blah";
}

$defaultMessage = "Hello, World";

print $defaultMessage;

echo "<br/>";

valueFunction($defaultMessage);

print $defaultMessage;

echo "<br/>";

referenceFunction($defaultMessage);

print $defaultMessage;

//Step 3
$age = 26;

function ageFunction()
{
    global $age;
    echo "<h1>You are " . $age . " years old</h1>";
}

ageFunction();