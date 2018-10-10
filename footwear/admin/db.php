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



	// Ham lay ra tat ca san pham khong phan trang
	public function getAllProducts2(){

	 	// stt trang bat dau
	 	
	 	$sql ="SELECT * FROM `protypes` ,`products`,`manufactures` WHERE protypes.type_ID = products.type_ID AND manufactures.manu_ID = products.manu_ID ORDER BY ID DESC";
	 		return  self::$conn -> query($sql);
	 }
	





	 	// Ham lay ra tat ca san pham co phan trang
	 public function getAllProducts($page,$per_page){

	 	// stt trang bat dau
	 	$first_link=($page-1)*$per_page;
	 	$sql ="SELECT * FROM `protypes` ,`products`,`manufactures` WHERE protypes.type_ID = products.type_ID AND manufactures.manu_ID = products.manu_ID ORDER BY ID DESC LIMIT $first_link,$per_page";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }

	 // Ham Phan Trang 1,2,3..next , last
	  public function paginate($url,$total,$page,$per_page)
	  {
	  	if($total <= 0) {
				     return "";
				     }
				     $total_links = ceil($total/$per_page);
				     if($total_links <= 1) {
				     return "";
				     }
	  	$link="";$first_link = "";  $last_link="";  

				if ($page > 1) { 
				    
				$first_link = "<li><a href='$url'> First    </a></li>"; 
				} 
	  	for($i =1 ; $i <= $total_links;$i++)
	  	{
	  		$link = $link."<li><a href='$url?page=$i'>$i  </a></li>";
	  	}
	  	if($page < $total_links) { 
				   
				 
				$last_link = "<li><a href='$url?page=$total_links'> Last</a></li>";     
				}
	  	return $first_link.$link.$last_link;
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
	 	 	    	// Ham tim san pham = id co phan trang
	 public function SearchByID($id,$page,$per_page){
	 	$first_link=($page-1)*$per_page;
	 	$sql ="SELECT * FROM `protypes` ,`products`,`manufactures` WHERE (protypes.type_ID = products.type_ID AND manufactures.manu_ID = products.manu_ID) AND (description LIKE N'%$id %' OR name LIKE N'%$id%') ORDER BY ID DESC LIMIT $first_link,$per_page";
	 	// thuc thi cau truy van
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);
	 }
	     	// Ham tim san pham = id khong phan trang
	 public function SearchByID2($id){
	 	$sql ="SELECT * FROM `protypes` ,`products`,`manufactures` WHERE (protypes.type_ID = products.type_ID AND manufactures.manu_ID = products.manu_ID) AND (description LIKE N'%$id %' OR name LIKE N'%$id%') ORDER BY ID DESC";
	 	// thuc thi cau truy van
	 	return self::$conn -> query($sql);
	 }
	 public function AddProducts($name , $price ,$image,$description,$manu_ID,$type_ID){
	 	$sql="INSERT INTO `products`(`name`, `price`, `image`, `description`, `manu_ID`, `type_ID`) VALUES ($name,$price,$image,$description,$manu_ID,$type_ID)";
	 	var_dump($sql);
	 	return self::$conn -> query($sql);
	 }
	 public function getNameProtypes()
	 {
	 	$sql ="SELECT *FROM `protypes`";
	 	$result = self::$conn -> query($sql);
	 	return $this ->getData($result);

	 }




	







}