<?php 

//Connect to database
//require_once('include/connection.php');

?>

<?php 


class connect_product{
	
	public $productName;
	public $DbName;
	public $hostName;
	public $username;
	public $password;
	public $conn;
	
	function __construct(
	$tableName="whisky",
	$DbName="avectime.com",
	$hostName="localhost",
	$username="root",
	$password=""
	
	){
		$this->tableName=$tableName;
		$this->DbName=$DbName;
		$this->hostName=$hostName;
		$this->username=$username;
		$this->password=$password;
		
		
		//connect to heroku database i created called bigrwanda-database
 
 $hostname="us-cdbr-east-02.cleardb.com";
 $username="b2ffb9bae31362";
 $pass="83b1c0c2 ";
 $dbname="heroku_173a3af4752f299";
 $conn=new mysqli($hostname,$username,$pass,$dbname);
 if($conn->connect_error){
	 die($conn->connect_error);
 }
		else{
			
			
			
			
			//echo "Connected to database";
		}
		
	}
	
	//All whisky page function
	
	function get_product_from_db(){
	
	//Fetch all product
		
  $query=$this->conn->prepare("SELECT id,product_image,product_name,product_desc,actual_price,
discount_price,delivery_price,order_date FROM whisky")or die($this->conn->error);

 $query->execute();
 
 //Get resut;

$result=$query->get_result();

if($result->num_rows>0){
	return $result;
}
else{
	echo "No Record Found";
}
	
	
	}
	



//whisky brands function

function product(){
	if(isset($_SESSION['product_id'])){
	$value=$_SESSION['product_id'];
	
		
		//Fetch all product
	
  $query=$this->conn->prepare("SELECT id,product_image,product_name,actual_price,
discount_price,delivery_price,size FROM whisky_brands WHERE id=?")or die($this->conn->error);
$query->bind_param('i',$value);
 $query->execute();
 
 //Get resut;

$result=$query->get_result();

if($result->num_rows>0){
	return $result;
}
else{
	echo "No Record Found";
}
		
}
}


		


//whisky brands size(thumbnails) function
/*
function thumbnail(){
	
	$id= $_SESSION['thumbnail_id'];
$query=$this->conn->prepare("SELECT * FROM whisky_brands_size WHERE id=? ")or die($this->conn->error);
$query->bind_param('s',$id);
$query->execute();

//bind result;
$result=$query->get_result();

if($result->num_rows>0){
	return $result;
}
}
*/

}	
	
	




?>
