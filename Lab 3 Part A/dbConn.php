<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 10/5/15
 * Time: 7:57 PM
 */
function getDBConnection()
{
    $db = mysqli_connect("localhost","root", "inet2005","sakila");
    if (!$db)
    {
        die('Could not connect to the Sakila Database: ' . mysqli_error($db));
    }

    return $db;
}