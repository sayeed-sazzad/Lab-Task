<!DOCTYPE html>




<html>

	<head>
	
		<title>Name</title>
	
	</head>

	<body>
	
	
		<form method="post" action="">
		
			<fieldset>
			
			
				<legend>Email</legend>
				<input type="email" name="email" value=" <?php
					
					
					if(isset($_POST["email"]))
					{
						echo $_POST["email"];
					}

				?>" >
				<hr>
				<input type="submit">
			
			
			</fieldset>
		
		
		</form>
		
	
	
	</body>


</html>