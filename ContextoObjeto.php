<?php
	class foo
	{
		static private $b = 30;

		static function a()
		{
			foo::$b++;
			echo foo::$b;
		}
	}

	foo::a();
?>
