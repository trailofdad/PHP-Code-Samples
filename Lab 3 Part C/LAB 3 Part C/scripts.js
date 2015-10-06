"use strict";


function makeYellow(id)
{
    document.getElementById(id).style.backgroundColor = "yellow";
    document.getElementById(id).parentElement.style.textDecoration = "underline";
}

function clearYellow(id)
{
    document.getElementById(id).style.backgroundColor = "white";
    document.getElementById(id).parentElement.style.textDecoration = "none";
}

function validateForm()
{
    var firstName = document.getElementById("fname");
    var lastName = document.getElementById("lname");
    var addressOne = document.getElementById("a1");
    var addressTwo = document.getElementById("a2");
    var email = document.getElementById("email");
    var checkbox = document.getElementById("agreement");

    if (firstName == null || firstName == "")
    {
        alert("Name must be filled out");
        document.getElementById("fname").style.border = "2px solid red";
    }
    else if (lastName == null || lastName == "")
    {
        alert("Last name must be filled out");
        document.getElementById("lname").style.border = "2px solid red";
    }
    else if (addressOne == null || addressOne == "")
    {
        alert("Address One must be filled out");
        document.getElementById("a1").style.border = "2px solid red";
    }
    else if (addressTwo == null || addressTwo == "")
    {
        alert("Address Two must be filled out");
        document.getElementById("a2").style.border = "2px solid red";
    }
    else if (email == null || email == "")
    {
        alert("Email must be filled out");
        document.getElementById("email").style.border = "2px solid red";
    }
    else if (checkbox.checkValidity() == false)
    {
        alert("You must agree to the terms of service");
        document.getElementById("span").style.visibility = "visible";
    }
    else
    {
        alert("form validated");
    }
}