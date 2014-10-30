<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../style/main.css">
	<script src="../js/custom.js"></script>
	<script src="../js/dist/html5shiv.js"></script>
	<script src="../js/dist/html5shiv-printshiv.js"></script>
	<title>Administracion</title>
</head>
<body>
	<header>
	<h1 id="banner">Bienvenido <?= $user; ?></h1>
	</header>
		<nav>
			<ul class="menu">
				<li class="menu-op"><a href="#" class="lmenu"  onclick="toggle_showt('showt');">Ver Ticket</a> </li>
				<li class="menu-op"><a href="#" class="lmenu" onclick="toggle_create('create');">Crear Ticket</a></li>
				<li class="menu-op"><a href="logout.php" class="lmenu">salir</a></li>
			</ul>
		</nav>
	<section>
		<article id="showt">
				
		</article>
		<article id="create">
				<form action="" method="POST"  id="frm-login">
					<label for="num" class="frm-space"><strong>Cantidad de codigos a generar</strong></label>
					<br>
					<input type="text" class="frm-space" name="num" maxlength="4">
					<br>
					<input type="submit" value="Crear" id="button">
				</form>
		</article>
		<article>
			<?php if(isset($num)){
				echo $num;
			}
			 ?>
			
		</article>
	</section>
</body>
</html>