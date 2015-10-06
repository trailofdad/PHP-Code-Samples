/**
 * Created by inet2005 on 10/5/15.
 */

"use strict";

//document.getElementById("fname").addEventListener("focus", makeYellow("fname"));
//document.getElementById("lname").addEventListener("focus", makeYellow("lname"));
//document.getElementById("a1").addEventListener("focus", makeYellow("a1"));
//document.getElementById("a2").addEventListener("focus", makeYellow("a2"));
//document.getElementById("email").addEventListener("focus", makeYellow("email"));
//
//document.getElementById("fname").addEventListener("blur", clearYellow("fname"));
//document.getElementById("lname").addEventListener("blur", clearYellow("lname"));
//document.getElementById("a1").addEventListener("blur", clearYellow("a1"));
//document.getElementById("a2").addEventListener("blur", clearYellow("a2"));
//document.getElementById("email").addEventListener("blur", clearYellow("email"));

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

}