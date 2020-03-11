<?php
	class foo
	{
		protected $valor = 30;

		function metodo()
		{
			echo "foo::metodo()\n";
		}
	}

	class bar extends foo
	{
		function metodo()
		{
			parent::metodo();
			echo "bar::metodo()\nValor = {$this->valor}\n";
		}
	}

	$a = new bar();
	$a->metodo();
?>
