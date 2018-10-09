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
	// Ham lay ra ten san pham
	 public function getProducts(){
	 	$sql ="SELECT * FROM `products` WHERE ID > ((SELECT MAX(ID) FROM products)-4)";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }
	 	// Ham lay ra tat ca san pham
	 public function getAllProducts(){
	 	$sql ="SELECT * FROM `products`";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }
	  	// Ham lay ra thong tin san pham = id
	 public function getProductsByID($id){
	 	$sql ="SELECT * FROM `products` WHERE ID = $id";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }





}