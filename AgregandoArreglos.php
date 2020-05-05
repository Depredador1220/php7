<?php
	$a1 = array('a', 'b');
	$a2 = array('c', 'd');

	$b1 = $a1 + $a2;
	$b2 = $a2 + $a1;

	$c1 = array_merge($a1, $a2);
	$c2 = array_merge($a2, $a1);

	print_r($b1);
	print_r($b2);
	print_r($c1);
	print_r($c2);
?>
