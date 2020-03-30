<?php
	namespace Prueba;

	include "Utilities.php";

	function f1($a)
	{
		return $a * 3;
	}

	echo "Relativo\n";
	echo f1(5) . "\n";
	echo Utilities\f1(5) . "\n";

	namespace MiProyecto;

	echo "Absoluto\n";
	echo \Prueba\f1(5) . "\n";
	echo \Prueba\Utilities\f1(5) . "\n";
?>
