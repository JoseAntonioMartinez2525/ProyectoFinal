<?php

include_once "config.php";
include_once "connectionController.php";

if (isset($_POST['action'])){
	if (isset($_POST['token']) && $_POST['token']==$_SESSION['token']){
	$authController = new AuthController();

		switch ($_POST['action']) {

		case 'register':
		#var_dump($_POST);

			$name = strip_tags($_POST['name']);	
			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);

			$authController->register($name,$email,$password);
		break;
		case 'login':
			$email = strip_tags($_POST['email']);
			$password = strip_tags($_POST['password']);

			$authController->access($email,$password);	
			break;
		}
	}else{
		$_SESSION['error']= 'de seguridad';
		header("Location:". $_SERVER['HTTP_REFERER'] );		
	} 
		
}


class AuthController 
{
	public function register($name, $email,$password)
	{
		$conn = connect();
		if (!$conn->connect_error){
			if ($name!="" && $email !="" && $password !=""){

				#encriptar
			$originalPassword = $password;	
			$password = sha1($password.'hola_123');
			
			$query = " insert into usuarios(name,email,password)
				value(?,?,?) ";

			$prepared_query = $conn->prepare($query);
			$prepared_query->bind_param('sss',$name,$email,$password);

			if ($prepared_query->execute()) {

				#login

					$this->access($email,$originalPassword);
				
			}else{

				$_SESSION['error']= 'verifique los datos enviados';
				header("Location:". $_SERVER['HTTP_REFERER'] );
			}	

			}else{
				$_SESSION['error']='verifique la informacion del formulario';

				header("Location: ../login/login.php");
			} 




		}else{
		$_SESSION['error']='verifique la conexion a la base de datos';
			header("Location:". $_SERVER['HTTP_REFERER']);	
		}

	}



	public function access($email, $password)
	{
		$conn = connect();
		if (!$conn->connect_error) {
			if ($email!="" && $password!="") {
				$originalPassword = $password;
				$password = sha1($password.'hola_123');

				$query = "select * from usuarios where email = ? and password = ?";
				$prepared_query = $conn->prepare($query);

				$prepared_query->bind_param('ss',$email, $password);
				if ($prepared_query->execute()) {
					
				

					$results = $prepared_query->get_result();
					$usuario = $results->fetch_all(MYSQLI_ASSOC);
					if (count($usuario)>0){

						$usuario = array_pop($usuario);
						$_SESSION['id'] = $usuario['id'];
						$_SESSION['name'] = $usuario['name'];
						$_SESSION['email'] = $usuario['email'];
						#$_SESSION['rol'] = $usuario['rol'];
						header("Location:".BASE_PATH."in/");						
					}

				}else{
					$_SESSION['error']= 'verifique los datos enviados';
					header("Location:". $_SERVER['HTTP_REFERER'] );
				}
			}else{
				$_SESSION['error']='verifique la informacion del formulario';

				header("Location: ../login/login.php");
			}
		}else{
			$_SESSION['error']='verifique la conexion a la base de datos';
			header("Location:". $_SERVER['HTTP_REFERER']);	
		}
}


public function logout()
{

	}

}

?>