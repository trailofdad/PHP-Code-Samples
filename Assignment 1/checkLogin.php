<?php

session_start();

ob_start();

require_once('dbConn.php');
$db = getDBConnection();

$loginUser = $_POST['loginUser'];
$loginPwd = $_POST['loginPwd'];

//$loginUser = stripcslashes($loginUser);
//$loginPwd = stripcslashes($loginPwd);
//$loginUser = mysqli_real_escape_string($db,$loginUser);
//$loginPwd = mysqli_real_escape_string($db,$loginPwd);

$sqlStatement = "SELECT * FROM WebUsers WHERE user_name='$loginUser' and user_pwd='$loginPwd'";

$result = mysqli_query($db,$sqlStatement);

$count = mysqli_num_rows($result);

mysqli_close($db);

if($count == 1)
{
    $_SESSION['loginUser'] = $loginUser;
    header("location:index.php");
}
else{
    echo "Wrong Username or Password!";
    echo "<br/>";
    echo "<a href='login.html'>Try Again</a>";
}

ob_end_flush();