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
$eventname1=$_POST["eventname"];
$sql = "SELECT suggestions,name FROM volunteertable natural join signup where eventId='$eventname1'";  
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { echo '<br>';
    	echo " Name:{$row['name']}";
			echo"Suggestions : {$row['suggestions']}  "."<br>";
 }
}
$sql1= "SELECT suggestions,name FROM donortable natural join signup where eventId='$eventname1'";  
$retval1=mysqli_query($conn, $sql1);  
if(mysqli_num_rows($retval1) > 0){  
 while($row = mysqli_fetch_assoc($retval1))
 { echo '<br>';
    	echo " Name:{$row['name']}";
			echo"Suggestions : {$row['suggestions']}  "."<br>";
 }
}
else{  
echo "No Suggestions for the event from investor";  
}  
mysqli_close($conn);  
?>  

 