<?php
	class SobrecargaMetodos
	{
		private function call($nombre, $param, $contexto)
		{
			switch($nombre)
			{
				case 'f1':
				case 'f2':
					echo "Tu llamaste a $nombre en el contexto $contexto\n";
					break;
				default:
					trigger_error("'$nombre' es un metodo indefinido", E_USER_NOTICE);
					break;
			}
		}

		function __call($nombre, $param)
		{
			$this->call($nombre, $param, 'object');
		}

		static function __callStatic($nombre, $param)
		{
			self::call($nombre, $param, 'static');
		}

		static function abc()
		{
			echo "llamada a abc()\n";
		}
	}

	$a = new SobrecargaMetodos();
	$a->f1();

	SobrecargaMetodos::f2();
	SobrecargaMetodos::F2();
	SobrecargaMetodos::ABC();
?>
