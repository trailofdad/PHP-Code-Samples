<?php
session_start();
require 'isLoggedIn.php';
checkIfLoggedIn();


echo "<p>Add a record to the database:</p><br/>";
echo "<form action='addHandler.php' method='post' enctype='multipart/form-data' name='myForm'>";
echo "First Name: <br/>";
echo "<input type='text' name='addFirst'> <br/>";
echo "Last Name: <br/>";
echo "<input type='text' name='addLast'> <br/>";
echo "Birth Date: <br/>";
echo "<input type='text' name='addBirthDate'> <br/>";
echo "Gender: <br/>";
echo "<input type='text' name='addGender'> <br/>";
echo "Hire Date: <br/>";
echo "<input type='text' name='addHireDate'> <br/>";
echo "<input type='submit' value='add' name='submit'>";
echo "</form>";
echo "<p>" . $_SESSION['loginUser'] . " logged in";
echo "<form action='logOut.php' method='post' enctype='multipart/form-data'><button type='submit' name='logOut'>Log Out</button></form>";