<?php

echo "Your first name is: " . $_POST["firstname"] . "<br/>";
echo "Your last name is: " . $_POST["lastname"] . "<br/>";
echo "Your height in metres is: " . (($_POST["feet"]*12) + $_POST["inches"])*0.0254 . "<br/>";

$target_dir = "/uploads";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

echo "Tmp: " . $target_dir  . "<br/>";
echo "Orig: " . $target_file . "<br/>";
echo "Size: " . sizeof($_FILES["fileToUpload"]);

//Source: W3schools.com/pgp/php_file_upload
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
