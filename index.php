<!DOCTYPE html>
<html>
<head>
	<title></title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>


<div class="container">
<div class="jumbotron container text-center">


		<h2>LISTAR DE DATOS</h2>


		<?php 

			$servidor='localhost';
			$usuario='root';
			$clave='12345678';
			$bd='datos';

				
			$conexion= mysqli_connect($servidor,$usuario,$clave,$bd);

			$lista= 'select * from usuario';

			$resultado=mysqli_query($conexion,$lista);
			if ($resultado->num_rows > 0) {
				¨/*echo "tiene  ".$resultado->natcasesort( )um_rows."   registros";*/
		?>	
	</div>

		<table class="table">
		<tr>
			<td><b>Nombres</b></td>
			<td><b>Actualizar</b></td>
			<td><b>Borrar</b></td>


			
</tr>

<?php  
	while ($registro=mysqli_fetch_assoc($resultado)) {
?>
	<tr>
		<td><?php echo $registro['nombre']?></td>
		<td><a href="editar.php?identificacion=<?= $registro['id'] ?>" class="btn btn-warning btn-sm">Actualizar</a></td>
		<td><a href="delete.php?identificacion=<?= $registro['id'] ?>" class="btn btn-danger btn-sm">Borrar</a></td>
	</tr>	
	

<?php }  ?>		
	</table>		
<?php  		

	}else{
		echo "no hay registro";
	}
		
 ?>
 
  <a href="formulario.php" class="btn btn-info btn-sm">Ingresa Datos</a>

</div>

</body>
</html>