<?php
	class foo
	{
		private $a = 5;

		function __invoke()
		{
			var_dump($this);
		}
	}

	$a = new foo();
	$a();
?>
