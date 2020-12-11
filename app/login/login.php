<?php

include "../app/config.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Login y Registro</title>
	<link rel="stylesheet" type="text/css" href="../home/css/s.css">
	<style type="text/css">

		body{
	background-image: url(../home/img/bg1.jpg);
	background-size:cover;
	background-repeat: no-repeat;  
	background-position: center;
	background-attachment: fixed;
	}

	</style>
</head>
<body>

	<?php include "../layouts/alerts.template.php";?>

	<main>
		<div  class="contenedor__todo">
		<div class="caja__fondo">
			<div class="caja__fondo_login">
				<h3>¿Ya tienes una cuenta?</h3>
				<p>Inicia sesión para entrar a la página
				</p>
				<button id="btn__iniciar_sesion">Iniciar Sesión</button>

			</div>

			<div class="caja_fondo_register">
				<h3>¿Aún no tienes una cuenta?</h3>
				<p> regístrate para que puedas iniciar sesión. 
				</p>
				<button  id="btn__registrarse" onclick="register();"> Registrarse</button>
			
			</div>	
		</div>

		<!--Formulario de Login y Registro-->
		<div class="contenedor__login_register">

			<!--Login -->
			<form action="<?=BASE_PATH?>/auth/" method="POST" class="formulario__login">
				
				<h2>Iniciar sesión</h2>
				
				<input type="text" placeholder="email" name="email" required="">
				
				<input type="password" placeholder="password" name="password" required="">

				<button>Access</button>
				<input type="hidden" name="action" value="login">
				<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">

			</form>

			<!--Registro -->
			<form action="<?=BASE_PATH?>/auth/" method="POST" class="formulario__register">
				<h2>Registrarse</h2>

				<input type="text" placeholder="Nombre Completo"  name="name">

				<input type="text" placeholder="email"  name="email">

				<input type="text" placeholder="Usuario" name="usuario">

				<input type="password" placeholder="password" name="password">


				<h2 for="rol">Tipo de usuario</h2 >
			
			<select style="text-align: center;">
				<option id="1">
					Administrador
					</option>
					<option id="2">
						Cliente
					</option>

			</select>
					
								
					<button  type="submit" style="margin-left: 30px;">Registrarse</button>
					
					<input type="hidden" name="action" value="register">
					<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
			</form>
 
		</div>
	</div>
	</main>
<script type="text/javascript">

var contenedor_login_register=document.getElementById('.contenedor__login_register');
var formulario_login=document.querySelector('.formulario__login');
var formulario_register=document.querySelector('.formulario__register');
var caja_fondo_login=document.querySelector('.caja__fondo_login');
var caja_fondo_register=document.querySelector('.caja__fondo_register');

function register(){
formulario_register.style.display="block";
contenedor_login_register.style.left="410px";
formulario_login.style.display="none";
caja_fondo_register.style.opacity='1';
caja_fondo_login.style.opacity="1";


}
document.getElementById('btn__registrarse').addEventListener("onclick", register);
</script>
</body>
</html>