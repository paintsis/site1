<?php
	if(!isset($_POST['token'])){
		header("Location: ../index.php");
	}

	include "config.php";

	function user_login($user,$pass,$dbattr = array()){
		extract($dbattr);
		echo $dbhost;
		
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_error($link)); 
		$ssql = "SELECT * FROM auth_user WHERE user='$user' and pwd='$pass'";
		
		$result = $conn->query($ssql); 
		while($row = mysqli_fetch_array($result)) { 
		
  			$ruser = array('user'=> $row["user"],'rol'=>$row["rol"]);
		} 

		//$result = mysql_query($ssql) or die("error" . mysql_error());
		if(empty($ruser)){
			header("Location: index.php?error=yes");
		}
		else{
		return $ruser;	
		}
		

	}
	