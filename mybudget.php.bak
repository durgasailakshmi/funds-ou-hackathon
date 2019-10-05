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
$sql = "SELECT budget FROM createevents where eventId='$eventname1'";  
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { echo '<br>';
    	echo " Required Budget  : {$row['budget']}  "."<br>";
 }
}

$sql1 = "SELECT sum(amount) as amount FROM donortable group by eventId";  
$retval1=mysqli_query($conn, $sql1);  
if(mysqli_num_rows($retval1) > 0){  
 while($row = mysqli_fetch_assoc($retval1))
 { echo '<br>';
    	echo " Budget Recieved  : {$row['amount']}  ";
 }
}
else{  
echo "No Budgets allocated for the event";  
}  
mysqli_close($conn);  
?>  

 