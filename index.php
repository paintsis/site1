<?php 
	//dependecias de archivos
	require "config.php";
	require "helpers.php";
	$titulo = "Inde";
	$lenguaje = "php";
	view("frm_login",compact('lenguaje','titulo'));