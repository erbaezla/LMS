	<?php

	$nom='nombre';

	try
	{
	  $con = new PDO('mysql:host=localhost;dbname=datos', 'root', '12345678');
	  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  $stmt = $con->prepare('DELETE FROM usuario WHERE nombre = :nombre');
	  $rows = $stmt->execute( array( ':nombre' => $nom));

	  

	  if( $rows > 0 )
	    echo 'Borrado correcto';
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}

	//header('location: index.php')

	?>