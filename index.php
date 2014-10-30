<?php 
	//dependecias de archivos
	require "config.php";
	require "helpers.php";
	$lenguaje = "PHP";
	$titulo = "Inde";

	view("frm_login",compact('lenguaje','titulo'));