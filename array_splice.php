<?php
	$a = array(
		'Manzana',
		'Naranja',
		'Platano',
		'Animal'   => 'Caballo',
		'Vehiculo' => 'Camion'
	);

	$b = array(
		'Fresa',
		'Uvas'
	);

	//Remuevo todos menos dos elementos del arreglo
	$a1 = $a;
	$r  = array_splice($a1, 2, 2);
	print_r($r);
	echo '<br />';
	print_r($a1);

	//Inserto b dentro de a
	$a1 = $a;
	$r  = array_splice($a1, 2, 0, $b);
	print_r($r);
	echo '<br />';
	print_r($a1);

	//Remuevo un elemento dentro de b
	$a1 = $a;
	$r  = array_splice($a1, 2, 1, $b);
	print_r($r);
	echo '<br />';
	print_r($a1);
?>
