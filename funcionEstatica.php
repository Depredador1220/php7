<?php
	class foo
	{
		//funcion estatica
		static function a()
		{
			echo "Prueba\n";
		}
	}

	foo::a();
	$foo = new foo();
	$foo->a();
?>
