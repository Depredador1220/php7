<?php
	class auto
	{
		private $tipo;
		private $propiedades = array();

		function __construct($tipo)
		{
			$this->tipo = $tipo;
		}

		function __set($nombre, $valor)
		{
			switch($nombre)
			{
				case 'tipo':
					$this->tipo = $valor;
					break;

				case 'llantas':
					
					if(in_array($valor, array(3,4,6)))
					{
						$this->propiedades[$nombre] = $valor;
					}

					else
					{
						trigger_error("La propiedad llantas debe ser 3, 4 o 6", E_USER_NOTICE);
					}

					break;

				case 'asientos':

					if(in_array($valor, array(2,4,5,7,8)))
					{
						$this->propiedades[$nombre] = $valor;
					}

					else
					{
						trigger_error("La propiedad asientos debe ser 2, 4, 5, 7 o 8", E_USER_NOTICE);
					}

					break;

				default:
					$this->propiedades[$nombre] = $valor;
					break;
			}
		}

		function __get($nombre)
		{
			if(array_key_exists($nombre, $this->propiedades))
			{
				return $this->propiedades[$nombre];
			}

			else if($nombre == 'tipo')
			{
				return $this->tipo;
			}

			trigger_error("Propiedad indefinida como $nombre", E_USER_NOTICE);

			return null;
		}

		function __isset($nombre)
		{
			return array_key_exists($nombre, $this->propiedades);
		}

		function __undet($nombre)
		{
			unset($this->propiedades[$nombre]);
		}

		function __toString()
		{
			$prop = array();

			foreach ($this->propiedades as $k => $v) 
			{
				$prop[] = "$v $k";
			}

			return "El {$this->tipo} tiene " . implode(", ", $prop) . "\n";
		}
	}

	$c1 = new auto("Tractor");
	$c1->llantas = 4;
	$c1->asientos = 2;
	$c1->color = "Azul";

	$c2 = new auto("Trailer");
	$c2->llantas = 6;
	$c2->asientos = 2;
	$c2->color = "Rojo";

	echo $c1;
	echo $c2;

	$c2->asientos = 9;
?>
