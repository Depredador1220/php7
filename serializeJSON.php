<?php
	$a = array(
		'Manzana',
		'Naranja',
		'Platano',
		'Animal'   => 'Caballo',
		'Vehiculo' => 'Camion'
	);

	echo serialize($a);
	echo '<br />';
	echo json_encode($a);
?>
