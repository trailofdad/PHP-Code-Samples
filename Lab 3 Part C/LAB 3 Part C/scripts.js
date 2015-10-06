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
    var firstName = document.forms["myForm"].fname.value.length;
    var lastName = document.forms["myForm"].lname.value.length;
    var addressOne = document.forms["myForm"].a1.value.length;
    var addressTwo = document.forms["myForm"].a2.value.length;
    var email = document.forms["myForm"].email.value.length;
    var check = document.getElementById("check").checked;

    if (firstName == 0)
    {
        alert("Name must be filled out");
        document.getElementById("fname").style.border = "2px solid red";
        return false;
    }
    else if (lastName == 0)
    {
        alert("Last name must be filled out");
        document.getElementById("lname").style.border = "2px solid red";
        return false;
    }
    else if (addressOne == 0)
    {
        alert("Address One must be filled out");
        document.getElementById("a1").style.border = "2px solid red";
        return false;
    }
    else if (addressTwo == 0)
    {
        alert("Address Two must be filled out");
        document.getElementById("a2").style.border = "2px solid red";
        return false;
    }
    else if (email == 0)
    {
        alert("Email must be filled out");
        document.getElementById("email").style.border = "2px solid red";
        return false;
    }
    else if (check == false)
    {
        alert("You must agree to the terms of service");
        document.getElementById("span").style.display = "block";
        return false;
    }
    else
    {
        alert("form validated");
        return true;
    }
}