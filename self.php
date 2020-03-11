<?php
	class foo
	{
		static private $valor = 30;

		function getValor()
		{
			return self::$valor;
		}
	}

	echo foo::getValor() . "\n";
	$bar = new foo();
	echo $bar->getValor() . "\n";
?>
