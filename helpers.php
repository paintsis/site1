<?php

	function view($template,$vars = array()){
		extract($vars);
		require "views/$template.php";	
	}