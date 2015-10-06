/**
 * Created by inet2005 on 10/5/15.
 */

"use strict";

document.getElementById("fname").addEventListener("onchange", makeYellow("fname"));
document.getElementById("lname").addEventListener("onchange", makeYellow("lname"));
document.getElementById("a1").addEventListener("onchange", makeYellow("a1"));
document.getElementById("a2").addEventListener("onchange", makeYellow("a2"));
document.getElementById("email").addEventListener("onchange", makeYellow("email"));

document.getElementById("divOne").addEventListener("click", function(){
    expandMenu('divOne');
});


function makeYellow(id)
{
    document.getElementById(id).style.backgroundColor = "yellow";
}

function validateForm()
{

}