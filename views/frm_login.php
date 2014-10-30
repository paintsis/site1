<?php
$token = sha1(rand(0,999).rand(999,9999).rand(1,300));
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<script src="js/dist/html5shiv.js"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/main.css">
	<title><?= $titulo?></title>
</head>
<body>
	<header>
		<h1 id="banner">Bienvenido</h1>
	</header>
	<section>
	   <form  id="frm-login" method="POST" action="auth.php">
		<label for="Login" class="frm-space"><strong>Usuario </strong> </label>
			<br>
			<input type="text" class="frm-space" required placeholder="Usuario" title="Ingrese su usuario"  name="user">
			<br>
		<label for="pwd" class="frm-space"><strong>Contraseña</strong></label>
			<br>
			<input type="password" class="frm-space" required placeholder="Contraseña"  name="pwd">
			<br>
			<input type="submit" value="Aceptar" id="button">
			<input type="hidden" value = "<?= $token;?>" name="token">
		</form>

	</section>
</body>
</html>

