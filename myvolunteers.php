
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
$sql = "SELECT name,phone,category FROM volunteertable natural join signup where eventId='$eventname1'";  
$retval=mysqli_query($conn, $sql);  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { echo '<br>';	
    	echo "Volunteer Name : {$row['name']}		".  
            " CONTACT NUMBER: {$row['phone']}		".
		 "Category: {$row['category']} "."<br>";
 }
}else{  
echo "No Volunteers for the event";  
}  
mysqli_close($conn);  
?>  

 