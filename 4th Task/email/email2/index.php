<!DOCTYPE html>



<?php

	
	
	if(isset($_POST["email"]))
	{
		echo "Your name: " .$_POST["email"];
	}




?>

<html>

	<head>
	
		<title>Email</title>
	
	</head>

	<body>
	
	
		<form method="post" action="">
		
			<fieldset>
			
			
				<legend>Email</legend>
				<input type="email" name="email">
				<hr>
				<input type="submit">
			
			
			</fieldset>
		
		
		</form>
		
	
	
	</body>


</html>