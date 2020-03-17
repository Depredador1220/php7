<?php
	class foo
	{
		public $a = 5;

		function __clone()
		{
			$this->a = 0;
		}
	}

	$b = new foo();

	$c = $b;
	$c->a++;
	echo $b->a . "\n";

	$d = clone $b;
	$d->a++;
	echo $b->a . "\n";
	echo $d->a . "\n";
?>
