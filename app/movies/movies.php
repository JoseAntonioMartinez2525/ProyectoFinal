<?php 
include "../app/categoryController.php";
include "../app/movieController.php";
$categoryController = new CategoryController();
$movieController = new MovieController();

$categories = $categoryController->get();
$movies = $movieController->get();

	if (isset($_SESSION)==false || isset($_SESSION['id'])==false ) {
		header("Location:../log/");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>
	<style type="text/css">
		table, th, td{
			border: 2px ridge lightgray;
			border-collapse: collapse;
			
		}
		#updateForm{
			display: none;
		}
		body{
			font-family: sans-serif;
		}
		fieldset{
			width: 50%;
			height: 50%;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../home/css/style.css">

	<!--icono para la pestaña-->
	<link rel="shortcut icon" href="../home/img/film.png">

	<!--fontawesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" ></script>	
</head>
<body>
<!--nav-->
	<nav>
	<!--logo-->
	<a class="logo" href="#">	
		<img src="../home/img/logo.png">
	</a>
	<!--menu-->
	<ul class="menu">
		<li><a href="<?=BASE_PATH?>in/">Home</a></li>
		<li><a href="<?=BASE_PATH?>graf/">Dash</a></li>
		<li><a href="<?=BASE_PATH?>film/">Movies</a></li>
		<li><a href="<?=BASE_PATH?>users/">Clients</a></li>
		<li><a href="<?=BASE_PATH?>cat/">Categories</a></li>
	</ul>
	<!--search-->
	<div class="search">
		<input type="text" placeholder="Find your movie">
		<i class="fas fa-search"></i>
	</div>
	<dic class="user">
		<label style="color: white; font-weight: bold;">Admin</label>

        <a href="<?=BASE_PATH?>log/">
		<i style="float: right;cursor: pointer;" title="Cerrar sesión" class="fas fa-power-off"></i></a>
		
	</div>
	</nav>	
<center><br><br><br><br><br><br>
	<div style="padding-left: 20px; padding-right: 20px;padding-bottom: 20px;">
<h1>Movies</h1>

<?php include "../layouts/alerts.template.php";?>

<table>
	<thead>
		<th>
			#
		</th>
		<th>
			title
		</th>
		<th>
			cover
		</th>
		<th>
			details
		</th>
		<th>
			minutes
		</th>
		<th>
			clasification
		</th>
		<th>
			country
		</th>
		<th>
			cast
		</th>
		<th>
			category
		</th>

	</thead>
	<br>
		<tbody>
			<?php foreach ($movies as $movie): ?>
				<tr>
					<td>
						<?= $movie['id'] ?>
					</td>
					<td>
						<?= $movie['title'] ?>
					</td>
					<td>
						<img  style="width: 40%" src="../assets/img/<?= $movie['cover']?>">
					</td>
					<td>
						<a href="../details/details.php.?id=<?= $movie['id']?>">show details</a>
					</td>
					<td>
						<?= $movie['minutes'] ?>
					</td>
					<td>
						<?= $movie['clasification'] ?>
					</td>
					<td>
						<?= $movie['country'] ?>
					</td>
					<td>
						<?= $movie['cast'] ?>
					</td>
					<td>
						<?= $movie['category_id'] ?>
					</td>
														
				</tr>
			<?php endforeach ?>
		</tbody>
</table>
<form action="<?=BASE_PATH?>/movie/" method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>
			Add Movie
		</legend>
<br>
		<label>
			Title
		</label>
		<input type="text" name="name" placeholder="movie name" required="">
<br><br>
		<label>
			Cover
		</label>
		<input type="file" name="cover" required="" accept="image/*">
<br><br>
		<label>
			Description
		</label>
		<textarea name="description" rows="4" placeholder="description" required=""></textarea><br>
<br><br>
		<label>
			minutes
		</label>
		<input type="number" name="minutes" placeholder="120" required="">
<br>		

		<label>clasification
			</label>
			<select name="clasification" required="">
				<option>B15</option>
				<option>PG13</option>
			</select><br>
<br><br><br>
		<label>
			country
		</label>
		<input type="text" name="country" placeholder="country" required="">
<br><br><br>
		<label>
			cast
		</label>
		<input type="text" name="cast" placeholder="cast" required="">
<br><br><br>
		<label>
			category
		</label>
		<select name="category_id" required="">
			<?php foreach ($categories as $category):?>
    			<option value="<?=$category['id']?>" ><?=$category['name'] ?>	
    			</option>
				
			<?php endforeach ?>

		</select><br>			
<button style="float: right;background-color: blue; color: white;" type="submit">
				Save
			</button>
			<input type="hidden" name="action" value="store">
			<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">

	</fieldset>
</form>
</center>
</div>
</body>
</html>