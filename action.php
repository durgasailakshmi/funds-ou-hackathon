<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'recycle'; 
session_start();
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
$user1=$_SESSION['username'];
$buyer=$_SESSION['username1']; 
$sql = "INSERT INTO userbuyer(user,buyer) VALUES ('$user1', '$buyer')";
if(mysqli_query($conn, $sql)){  
 echo "successfully Sent";  
}else{  
echo "Not able to send it: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  