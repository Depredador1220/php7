<?php
	$principal = 1000;
	$interes   = 0.05;
	$periodos  = array(1, 2, 4, 12);

	foreach ($periodos as $p)
	{
		$ci = $principal * pow(1 + $interes / $p, $p);
		echo "Periodos: $p, valor futuro: $ci";
	}
?>
