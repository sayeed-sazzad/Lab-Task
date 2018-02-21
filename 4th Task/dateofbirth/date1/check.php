<?php

	
	
	if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["number3"] )){
		
		echo "Your Date of birth:" , "&nbsp;";
		echo $_POST["number1"] , "&nbsp;";
		echo "-".$_POST["number2"] , "&nbsp;";
		echo "-".$_POST["number3"];
	}
?>