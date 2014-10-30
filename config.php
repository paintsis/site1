<?php 
	ini_set('display_errors',true);
	error_reporting(E_ALL);
	//configuracion de varibles para base de datos mysql
	$dbname = "user";
	$dbpass = "indedb";
	$dbuser = "indedb";
	$dbtable = "auth_user";
	$dbhost = "localhost";
	compact('dbhost','dbuser','dbpass','dbname');