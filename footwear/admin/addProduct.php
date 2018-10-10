<?php
if(isset($_POST['name']))
{
}
else
{
	header("location:form.php");
}
$name = $_POST['name'];
$type_id = $_POST['type_id'];
$manu_id = $_POST['manu_id'];
$Dessciption = $_POST['Des'];
$Price = $_POST['Pri'];




$target_dir = "public/images/products/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["name"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
   			if($check !== false) {
        		echo "File is an image - " . $check["mime"] . ".";
        		$uploadOk = 1;
        	} else {
        		echo "File is not an image.";
       			 $uploadOk = 0;
   				}
    	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	$uploadOk = 0;
							}

							}
require "config.php";
	require "db.php";
	$db = new db;
	$image = $_FILES["fileUpload"]["name"];
	echo $image;
	$AddProducts = $db -> AddProducts($name , $Price ,$image,$Dessciption,$manu_id,$type_id);
	var_dump($AddProducts);
	//header("location:index.php");
	

?>