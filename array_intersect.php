<?php
	$a1 = array('x' => 'Naranja', 'y' => 'Uva', 'z' => 'Platano');
	$a2 = array('Uva', 'Platano');
	$b1 = array_intersect($a1, $a2);
	$b2 = array_intersect($a2, $a1);

	print_r($b1);
	print_r($b2);
?>
