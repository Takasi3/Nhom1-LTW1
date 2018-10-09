<?php
class db{
	// tao bien ket noi
	public static $conn;
	// viet ham ket noi
	public function __construct(){
		self::$conn =  new mysqli(DB_HOST , DB_USER , DB_PASS,DB_NAME);
		// hien thi ieng viet
	self::$conn -> set_charset('utf8');
	}
	
	// dong ket noi

	public function __destruct(){
		self::$conn->close();
	}
	// ham tra ve array tu object
	public function getData($obj){
		$arr = array();
		while ($row = $obj->fetch_assoc()){
			$arr[] = $row;
		}
		return $arr;
	}

	 	// Ham lay ra tat ca san pham
	 public function getAllProducts(){
	 	$sql ="SELECT * FROM `protypes` ,`products`,`manufactures` WHERE protypes.type_ID = products.type_ID AND manufactures.manu_ID = products.manu_ID ORDER BY ID DESC";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }
	  	// Ham lay hang~ san pham
	 public function getManuProducts(){
	 	$sql ="SELECT * FROM `manufactures`";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }
  	// Ham lay Loai san pham
	 public function getTypeProducts(){
	 	$sql ="SELECT * FROM `protypes`";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }
	   	// Ham Xoa san pham = id
	 public function DeleteByID($id){
	 	$sql ="DELETE FROM `products` WHERE ID = $id";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $result;
	 }
	    	// Ham Xoa hang~ = id
	 public function DeleteManuByID($id){
	 	$sql ="DELETE FROM `manufactures` WHERE manu_ID = $id";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $result;
	 }
	 	    	// Ham Xoa Nhan~ Hieu = id
	 public function DeleteTypeByID($id){
	 	$sql ="DELETE FROM `protypes` WHERE type_ID = $id";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $result;
	 }
	 	 	    	// Ham tim san pham = id
	 public function SearchByID($id){
	 	$sql ="SELECT * FROM `protypes` ,`products`,`manufactures` WHERE (protypes.type_ID = products.type_ID AND manufactures.manu_ID = products.manu_ID) AND (description LIKE N'%$id %' OR name LIKE N'%$id%') ORDER BY ID DESC";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }




}