<?php
if (isset($_POST['name'])) {
} else {
    header("location:form.php");
}
$name        = $_POST['name'];
$type_id     = $_POST['type_id'];
$manu_id     = $_POST['manu_id'];
$Dessciption = $_POST['Des'];
$Price       = $_POST['Pri'];

$target_dir    = "public/images/products/";
$target_file   = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk      = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileUpload"]["name"]) . " has been uploaded.";
        require "config.php";
        require "db.php";
        $db    = new db;
        $image = $_FILES["fileUpload"]["name"];
        $db->AddProducts($name, $Price, $image, $Dessciption, $manu_id, $type_id);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

if ($uploadOk != 0) {
    ?>
	<html>
<head>
<META http-equiv="refresh" content="5;URL=index.php">
</head>
</html>

<?php }?>

// header("location:index.php");
