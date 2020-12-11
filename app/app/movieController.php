<?php 

include_once "config.php";

include_once "connectionController.php";

if (isset($_POST['action'])){
	if (isset($_POST['token']) && $_POST['token']==$_SESSION['token']){
		$movieController = new MovieController();

		switch ($_POST['action']) {
			case 'store':
				$title= strip_tags($_POST['name']); 
				$description= strip_tags($_POST['description']);
				$minutes= strip_tags($_POST['minutes']);
				$clasification= strip_tags($_POST['clasification']);
				$country= strip_tags($_POST['country']);
				$cast= strip_tags($_POST['cast']);
				$category_id= strip_tags($_POST['category_id']);

				$movieController->store($title,$description,$minutes,$clasification,$country,$cast,$category_id);
								$target_path = "../assets/img/";
					$original_name = basename($_FILES['cover']['name']);
					$new_file_name = $target_path.'cover_movie_'.basename($_FILES['cover']['name']);


				break;
		
		}
	}else{
		$_SESSION['error']= 'de seguridad';
		header("Location:". $_SERVER['HTTP_REFERER'] );		
	} 


}

/**
 * 
 */
class MovieController 
{
	
	public function get()
	{
		$conn = connect();
		if ($conn->connect_error==false) {
			$query = "select * from movies";
			$prepared_query = $conn->prepare($query);
			$prepared_query->execute();

			$results = $prepared_query->get_result();
			$movies = $results->fetch_all(MYSQLI_ASSOC);

			if (count($movies)>0) {
				return $movies;
			} else 
					return array();
		} else 
				return array();
			
	}

	public function store($title,$description,$minutes,$clasification,$country,$cast,$category_id)
	{
		$conn= connect();
		if ($conn->connect_error==false){

			if ($title!="" && $description!="" && $minutes!="" && $clasification!="" && $country!="" && $cast && $category_id!=""){

				//SUBIR ARCHIVO COVER
				$target_path = "../assets/img/";
				$original_name = basename($_FILES['cover']['name']);
				$new_file_name = $target_path.basename($_FILES['cover']['name']);


				if (move_uploaded_file($_FILES['cover']['tmp_name'], $new_file_name)) {
				
				
				$query = "insert into movies (title,description,cover,minutes,clasification,country,cast,category_id) values(?,?,?,?,?,?,?,?)";
				$prepared_query = $conn->prepare($query);

				echo $new_file_name;

				$prepared_query->bind_param('sssisssi',$title,$description,$original_name,$minutes,$clasification,$country,$cast,$category_id);
				
				if ($prepared_query->execute()) {
					
					

					$_SESSION['success']= "el registro se ha guardado correctamente";
					header("Location:". $_SERVER['HTTP_REFERER'] );
				}else{

					
					$_SESSION['error']= 'verifique los datos enviados';
					header("Location:". $_SERVER['HTTP_REFERER'] );
					
				}
				}else{
					
				$_SESSION['error']= 'verifique la informacion del formulario';
					header("Location:". $_SERVER['HTTP_REFERER'] );
				}
		}else{
			 
		}
	}else{
		
			$_SESSION['error']= 'verifique la conexión a la base de datos';
			header("Location:". $_SERVER['HTTP_REFERER'] );
		} 

}

}
?>