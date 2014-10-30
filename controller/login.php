<?php
	include "../config.php";

	function user_login($user,$pass,$dbattr = array()){
		extract($dbattr);
		echo $dbhost;
		//$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('No se pudo conectar: ' . mysql_error());
		$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_error($link)); 
		$ssql = "SELECT * FROM auth_user WHERE user='$user' and pwd='$pass'";
		//mysql_select_db($dbname) or die ("error" . mysql_error());
		$result = $conn->query($ssql); 
		while($row = mysqli_fetch_array($result)) { 
		//echo $row["user"] . "<br>"; 
  		//echo $row["rol"] . "<br>"; 
  			$ruser = array('user'=> $row["user"],'rol'=>$row["rol"]);
		} 

		//$result = mysql_query($ssql) or die("error" . mysql_error());
		return $ruser;

	}
	