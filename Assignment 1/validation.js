"use strict";

function validateForm()
{
    var firstName = document.forms["myForm"].addFirst.value.length;
    var lastName = document.forms["myForm"].addLast.value.length;
    var BirthDate = document.forms["myForm"].addBirthDate.value.length;
    var Gender = document.forms["myForm"].addGender.value.length;
    var HireDate = document.forms["myForm"].addHireDate.value.length;

    if (firstName == 0)
    {
        alert("Name must be filled out");
        document.getElementById("addFirst").style.border = "2px solid red";
        return false;
    }
    else if (lastName == 0)
    {
        alert("Last name must be filled out");
        document.getElementById("addLast").style.border = "2px solid red";
        return false;
    }
    else if (BirthDate == 0)
    {
        alert("Birth Date must be filled out");
        document.getElementById("addBirthDate").style.border = "2px solid red";
        return false;
    }
    else if (Gender == 0)
    {
        alert("Gender must be filled out");
        document.getElementById("addGender").style.border = "2px solid red";
        return false;
    }
    else if (HireDate == 0)
    {
        alert("Hire Date must be filled out");
        document.getElementById("addHireDate").style.border = "2px solid red";
        return false;
    }
    else
    {
        alert("form validated");
        return true;
    }
}
