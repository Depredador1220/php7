<?php
	trait sumar
	{
		function sumar($a, $b)
		{
			return $a + $b;
		}
	}

	trait restar
	{
		function restar($a, $b)
		{
			return $a - $b;
		}
	}

	trait matematicas
	{
		use sumar, restar;
	}

	class calcular
	{
		use sumar, restar;
	}

	class calcular2
	{
		use matematicas;
	}

	$o = new calcular2();
	echo $o->sumar(26, 5) . "\n";
?>
