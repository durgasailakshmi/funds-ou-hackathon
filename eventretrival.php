
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
//echo 'Connected successfully<br/>';  
$sql = "SELECT * FROM createEvents";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval))
 { echo '<br>';
    	echo "BUYER NAME : {$row['username']}  ".  
            " CONTACT NUMBER: {$row['contactnumber']} ";
		$_SESSION['username1']=$row['username'];
	echo "<form method='post' action='action.php' name='action'>
	<input type='submit' name='submit'>
</form>";
 }
}else{  
echo "No Buyers in your locality";  
}  
mysqli_close($conn);  
?>  

 