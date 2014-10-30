<?php
	session_start();
	include "../config.php";
	if(($_SESSION['User']['Usuario'] == "") OR ($_SESSION['User']['rol'] != "admin") )
	{

		header("Location: ../index.php");
	}

	require "config.php";
	require "../helpers.php";
	$titulo = "Inde";
	$lenguaje = "php";
	$user = $_SESSION['User']['Usuario'];
	if(isset($_POST['num'])){
		if(empty($_POST['num'])){
			view("admin_",compact('user','titulo','num'));
		}

	}else{
		view("admin_",compact('user','titulo'));
	}

		


 	?>