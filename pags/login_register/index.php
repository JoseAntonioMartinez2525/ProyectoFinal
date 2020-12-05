<?php
if (!isset($_SESSION)) {
	session_start();
}

include "connectionCtrl.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Login y Registro</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
</head>
<body>
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
			<form class="formulario__login">
				
				<h2>Iniciar sesión</h2>
				<input type="text" placeholder="Correo electrónico">
				<input type="password" placeholder="contraseña" >
				<button>Entrar</button>

			</form>

			<!--Registro -->
			<form class="formulario__register" name="fr">
				<h2>Registrarse</h2>
				<input type="text" placeholder="Nombre Completo" >
				<input type="text" placeholder="Correo electrónico" >
				<input type="text" placeholder="Usuario">
				<input type="password" placeholder="contraseña" name="">
				<button>Registrarse</button>				
			</form>

		</div>
	</div>
	</main>
<script type="text/javascript">

var contenedor_login_register=document.querySelector('.contenedor__login_register');
var formulario_login=document.querySelector('.formulario__login');
var formulario_register=document.querySelector('.formulario__register');
var caja_fondo_login=document.querySelector('.caja__fondo_login');
var caja_fondo_register=document.querySelector('.caja__fondo_register');

function register(){
formulario_register.style.display="block";
contenedor_login_register.style.left="410px";
formulario_login.style.display="none";
caja_fondo_register.style.opacity="0";
caja_fondo_login.style.opacity="1";


}
document.getElementById('btn__registrarse').addEventListener("onclick", register);
</script>
</body>
</html>