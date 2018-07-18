<?php 

	// conexion  A LA BD
	/*try {
	  $con = new PDO('mysql:host=localhost;dbname=datos', 'root', '12345678');
	  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  $datos = $con->query('SELECT * FROM usuario');
	  foreach($datos as $row)

   		echo $row[0] . '<br/>';

		} catch(PDOException $e) {
		  echo 'Error conectando con la base de datos: ' . $e->getMessage();

	*/		
	$id='id';	  
	$nom='nombre';
	
	
try {
  $con = new PDO('mysql:host=localhost;dbname=datos', 'root', '12345678');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $con->prepare(
    'INSERT INTO usuario (id, nombre) VALUES (:id, :nombre)'
  );
  $rows = $stmt->execute(array(':id'=> $id, 'nombre' => $nom));

  if( $rows == 1 )
    echo 'Inserción correcta';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

	//header('location: index.php')

 ?>