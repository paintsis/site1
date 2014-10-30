<?php
	include "config.php";
	if(isset($_POST['user']) and isset($_POST['pwd']) )
	{
		if(empty($_POST['user']) or empty($_POST['pwd'])){
				echo "campos vacios";

		} else{

			echo $_POST['user'];	
			echo $_POST['pwd'];	
		}

	}	

	?>
