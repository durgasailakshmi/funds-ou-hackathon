<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>
		Create an Event:)
	</title>
	<style>
		form{
				padding-left:50px;
				margin-right:400px;
				margin-top:50px;
				border: 7px solid #f1f1f1;
				margin-left:500px;
				background-color: #ffffa0;
				
			}
			input[type=text] ,input[type=date] ,input[type=email], input[type=tel]
			{
				background-color: #f1f1f1;
				width:50%;
			}
			select
			{
				background-color: #f1f1f1;
			}
			
			@media screen and (max-height:1200px)
			{
				.form{
					margin-left: 100px;
					margin-right: 100px;
				}
			}
	</style>
</head>
<body>
	<?php
		session_start();
		$_SESSION['emailId']='abc@gmail.com';
	?>
<form  id=createevent action="createEventPhp.php" method="post">
	<h3 style="color: red ;text-align: center;" ><b>Event <b></h3>
	<b>Event Name:</b>
		<input type="text"  name="eventId" required autofocus style="border-radius: 5px;"><br>
	<br>
	<b>Name of the NGO</b>
		<input type="text" name="ngoName" required style="border-radius: 5px;"><br>
	<br>
	<b>Description of the event</b><br>
		<textarea rows=10 cols=50 name="eventDesc"></textarea>	
	<br>
	<br>
	<b>Budget Required</b>
		<input type="number" name="budget"><br>
		<br>
	<br>
<!--<button>submit</button>-->
	<button type="submit">submit</button>
	<br>
	<br>
	</form>
	</body>
</html>