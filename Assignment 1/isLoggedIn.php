<?php

function checkIfLoggedIn()
{
    session_start();
    if(empty($_SESSION['loginUser']))
    {
        header("location:login.html");
    }
}