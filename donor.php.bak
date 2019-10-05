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
$amount=$_SESSION["amountd"];
$eventId1=$_SESSION['eventId'];
$suggestions1=$_SESSION["suggesstions"];
$donorId1='shivajyothi';
$sql = "INSERT INTO donortable (eventId,donorId,suggestions,amount) VALUES ('$eventId1', '$donorId1','$suggestions1','$amount')";
if(mysqli_query($conn, $sql)){  
 echo "Success";
 $sql1="update createevents set budget=budget-$amount";
 if(mysqli_query($conn, $sql1))
	{
	 echo "donated Successfully";
	}
	else
	{
		echo "didn't transfer try again";
	}
}else{  
echo "Register Again ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  