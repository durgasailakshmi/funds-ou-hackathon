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
$creatorId=$_SESSION['emailId'];
$eventId=$_POST['eventId'];
$ngoName=$_POST['ngoName'];
$eventDesc=$_POST['eventDesc'];
$budget=$_POST['budget'];
$sql = "insert into createevents(creatorId,eventId,ngoName,eventDesc,budget) values('$creatorId','$eventId','$ngoName','$eventDesc','$budget')";
if(mysqli_query($conn, $sql)){  
 echo "Success";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  