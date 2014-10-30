<?php
	session_start();
	include "config.php";
	include "controller/login.php";
	if(isset($_POST['user']) and isset($_POST['pwd']) )
	{
		if(empty($_POST['user']) or empty($_POST['pwd'])){
				
				header("Location: index.php");
		} else{

			$auth = user_login($_POST['user'],$_POST['pwd'],compact('dbhost','dbuser','dbpass','dbname'));

			$_SESSION['User'] = array(
                              'Usuario' => $auth['user'],
                              'rol'      => $auth['rol']);

			if($auth['rol'] == "admin"){

					header("Location: controller/admin.php");	
			}elseif ($auth['rol'] == "viewer") {

				header("Location: controller/usuario.php");	
				
			}
		
		}

	}	

	?>
