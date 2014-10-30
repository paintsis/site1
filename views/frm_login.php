<!DOCTYPE html>
<html lang="es">
<head>
	<script src="js/dist/html5shiv.js"></script>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/main.css">
	<title>Administracion</title>
</head>
<body>
	<header>
		<h1 id="banner">Bienvenido</h1>
	</header>
	<section>
	   <form  id="frm-login" method="POST" action="auth.php">
		<label for="Login" class="frm-space">Usuario</label>
			<br>
			<input type="text" class="frm-space" required placeholder="Usuario" title="Ingrese su usuario"  name="user">
			<br>
		<label for="pwd" class="frm-space">Contraseña</label>
			<br>
			<input type="password" class="frm-space" required placeholder="Contraseña"  name="pwd">
			<br>
			<input type="submit" value="Aceptar" id="button">
		</form>

	</section>
</body>
</html>

