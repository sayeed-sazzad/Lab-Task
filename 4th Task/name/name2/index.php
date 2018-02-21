<!DOCTYPE html>



<?php

	error_reporting();
	$name=$_POST["name"];
	
	if(isset($name))
	{
		echo "Your name: " .$name;
	}




?>

<html>

	<head>
	
		<title>Name</title>
	
	</head>

	<body>
	
	
		<form method="post" action="">
		
			<fieldset>
			
			
				<legend>NAME</legend>
				<input type="text" name="name">
				<hr>
				<input type="submit">
			
			
			</fieldset>
		
		
		</form>
		
	
	
	</body>


</html>