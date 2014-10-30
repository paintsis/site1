<?php
	
	session_start();
	require "config.php";
	require "../helpers.php";
	$titulo = "Inde";
	$lenguaje = "php";
	$user = $_SESSION['User']['Usuario'];
	view("admin_",compact('user','titulo'));


 	?>