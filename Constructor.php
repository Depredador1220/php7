<?php
	class foo
	{
		private $tipo = null;
		
		function __construct($tipo)
		{
			$this->tipo = $tipo;
		}

		function getTipo()
		{
			return $this->tipo;
		}
	}

	$t = new foo("Libro");
	echo $t->getTipo() . "\n";
?>
