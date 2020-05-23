<?php
	$a = array(
		'Manzana',
		'Naranja',
		'Platano',
		'Animal'   => 'Caballo',
		'Vehiculo' => 'Camion'
	);

	print_r(array_slice($a, 2, 2));
	echo '<br />';
	print_r(array_slice($a, 2, 2, true));
?>
