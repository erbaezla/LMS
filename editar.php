<?php 
	
	$servidor='localhost'; 
	$usuario='root';
	$clave='12345678';
	$bd='datos';

	$conexion=mysqli_connect($servidor,$usuario,$clave,$bd);

	$uno= 'SELECT * FROM usuario WHERE `id`='.$_GET['identificacion'];
	
	$resultado= mysqli_query($conexion,$uno);

	$fila_a_editar= mysqli_fetch_assoc($resultado);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

	<div class="container">
	<div class="jumbotron container text-center">

		<h2>Actulizar Datos</h2>
	</div>	

		<form action="actualizar.php" method="post">
	 
			<input type="text" name="nombre" value="<?=$fila_a_editar['nombre']?>"></input>
			<input type="submit" value="Enviar"></input>
			<input type="hidden" name="id" value="<?=$fila_a_editar['id']?>"></input>	


		</form>

	</div>

	
</body>
</html>
