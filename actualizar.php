<?php 
	

$id='id';	  
$nom='nombre';

try {
  $con = new PDO('mysql:host=localhost;dbname=datos', 'root', '12345678');
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $con->prepare(
    'UPDATE usuario SET id = :id WHERE nombre = :nombre'
  );
  $rows = $stmt->execute( array( ':id'   => $id,
                                    ':nombre' => $nom));
  if( $rows > 0 )
    echo 'Actualización correcta';
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

header('location: index.php')
	
	
?>

