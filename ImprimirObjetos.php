<?php
	class html
	{
		private $tipo;
		private $c = '';

		function __construct($tipo = 'div')
		{
			$this->tipo = $tipo;
		}

		function contenido($c)
		{
			$this->c .= $c;
		}

		function __toString()
		{
			return "<{$this->tipo}>{$this->c}</{$this->tipo}>";
		}
	}

	$div = new html();
	$span = new html('span');
	$span->contenido('Coloca algo de texto aqui');
	$div->contenido($span);
	echo $div;
?>
