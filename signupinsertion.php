<?php
session_start();
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'funds';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
$emailId1=$_POST['mailid'];
$name1=$_POST['name'];
$phone1=$_POST['phn'];
$pass1=$_POST['pwd'];
$sql = "insert into signup(emailId,name,phone,password) values('$emailId1','$name1','$phone1','$pass1')";
if(mysqli_query($conn, $sql)){  
 echo "Success";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  