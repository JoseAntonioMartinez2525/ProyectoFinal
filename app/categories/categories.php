<?php 
include "../app/categoryController.php";
$categoryController = new CategoryController();
$categories = $categoryController->get();

	if (isset($_SESSION)==false || isset($_SESSION['id'])==false ) {
		header("Location:../login/login.php");
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Categories</title>
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
		button{
			border-radius: 5px;
			color: white;
			border-color: transparent;
			cursor: pointer;
			
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
	<nav style="margin-bottom: 20px;">
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
	</nav><br><br><br><br><br>	

	
		<center>
	<h1>Categories</h1>

	<?php include "../layouts/alerts.template.php";?>

	<div>
		<table>
			<thead>
		<th>
			#
		</th>
		<th>
			Name
		</th>
		<th>
			Description
		</th>
		<th>
			Actions
		</th>	
			</thead>

<tbody>
<?php foreach ($categories as $category): ?> 
<tr>
		<td>
			<?= $category['id']?>
		</td>
		<td>
			<?= $category['name']?>
		</td>
		<td>
			<?= $category['description']?>
		</td>
		<td>
			<button onclick="edit(<?= $category['id'] ?>, '<?= $category['name']?>','<?= $category['description']?>','<?= $category['status'] ?>')" style="background-color: #16697a;">
				Edit category
			</button>
			<button  onclick="remove(<?= $category['id'] ?>)" style="background-color: #fc8621;">
				Delete category
			</button>
			
		</td>
		
	</tr>
<?php endforeach ?>

</tbody>
		</table><br>
<form id="storeForm" action="<?=BASE_PATH?>category/" method="POST">
	<fieldset style="width: 50%; height: 50%;">
		<legend>
			Add new Category
		</legend>	
			<label>Name
			</label>
			<input type="text" name="name" placeholder="terror" required=""><br><br>

			<label>Description
			</label>
			<textarea  style="width: 572px;height: 49px;" placeholder="write here" rows="4" name="description" required="">
			</textarea><br>

			<label>Status
			</label>
			<select id="status" name="status">
				<option>active</option>
				<option>inactive</option>
			</select><br>
			<button type="submit" style="float: right;background-color: #0e49b5">
				Save Category
			</button>
			<input type="hidden" name="action" value="store">
			<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
		
</fieldset>
</form>

<form id="updateForm" action="<?=BASE_PATH?>category/" method="POST">
	<fieldset style="width: 50%; height: 50%;">
		<legend>
			Edit Category
			</legend>
			<label>Name
			</label>
			<input type="text" name="name" id="name" placeholder="terror" required=""><br><br>

			<label>Description
			</label>
			<textarea id="description"  style="width: 572px;height: 49px;" placeholder="write here" rows="4" name="description" required="">
			</textarea><br>

			<label>Status
			</label>
			<select id="status" name="status">
				<option>active</option>
				<option>inactive</option>
			</select><br>
			<button type="submit" style="float: right;">
				Save Category
			</button>
			<input type="hidden" name="action" value="update">
			<input type="hidden" name="id" id="id">
			<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
		
</fieldset>
</form >

<form id="destroyForm" action="<?=BASE_PATH?>category/" method="POST">

	<input type="hidden" name="action" value="destroy">
	<input type="hidden" name="id" id="id_destroy">
<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">	
</form>

	</div>

	
</center>
<script type="text/javascript">
		function edit(id,name,description,status)
		{	
			document.getElementById('storeForm').style.display="none";

			document.getElementById('updateForm').style.display="block";

			document.getElementById('name').value = name;
			document.getElementById('description').value = description;
			document.getElementById('status').value = status;
			document.getElementById('id').value = id;
		}

		function remove(id)
		{
			var confirm = prompt("Si quiere eliminar el registro, escriba: "+id);
			if (confirm == id) {

				document.getElementById('id_destroy').value = id;
				document.getElementById('destroyForm').submit();

			}
		}
</script>
</body>
</html>