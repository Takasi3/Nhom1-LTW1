<?php
require "config.php";
require "db.php";
$db = new db;
if (isset($_GET['id'])) {
    $id     = $_GET['id'];
    $xoaanh = $db->getProductsByID($id);
    $file   = "public/images/products/" . (string) $xoaanh['0']['image'];
    if (file_exists($file)) {
        unlink($file);
    }
    $db->DeleteByID($id);
    header("location:index.php");
}

if (isset($_GET['manuid'])) {
    $id = $_GET['manuid'];
    $db->DeleteManuByID($id);
    header("location:manufactures.php");
}
if (isset($_GET['typeid'])) {
    $id = $_GET['typeid'];
    $db->DeleteTypeByID($id);
    header("location:protype.php");
}
