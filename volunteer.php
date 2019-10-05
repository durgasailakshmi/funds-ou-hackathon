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
$category1=$_POST["category2"];
$eventId1=$_SESSION['eventId'];
$volunteerId1=$_SESSION['username'];
$suggestions1=$_POST["suggestions2"];   
$sql = "INSERT INTO volunteertable (category,suggestions,volunteerId,eventId) VALUES ('$category1', '$suggestions1','$volunteerId1','$eventId1')";
if(mysqli_query($conn, $sql)){  
 echo "Success";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  