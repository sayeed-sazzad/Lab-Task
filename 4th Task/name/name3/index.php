<!DOCTYPE html>




<html>

	<head>
	
		<title>Name</title>
	
	</head>

	<body>
	
	
		<form method="post" action="">
		
			<fieldset>
			
			
				<legend>NAME</legend>
				<input type="text" name="name" value=" <?php
					
					
					if(isset($_POST["name"]))
					{
						echo $_POST["name"];
					}

				?>" >
				<hr>
				<input type="submit">
			
			
			</fieldset>
		
		
		</form>
		
	
	
	</body>


</html>