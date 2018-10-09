<?php
 	require "config.php";
	require "db.php";
	$db = new db;
	if(isset($_GET['id']))
		{
			$id =$_GET['id'];
			$db->DeleteByID ($id);
			header("location:index.php");
		}

	if(isset($_GET['manuid']))
		{
			$id =$_GET['manuid'];
			$db->DeleteManuByID ($id);
			header("location:manufactures.php");
		}
		if(isset($_GET['typeid']))
		{
			$id =$_GET['typeid'];
			$db->DeleteTypeByID ($id);
			header("location:protype.php");
		}		

