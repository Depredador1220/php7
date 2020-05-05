<?php
	class Complejo
	{
		public $re;
		public $im;

		function __construct($re, $im)
		{
			$this->re = $re;
			$this->im = $im;
		}

		static function Sumar(Complejo $c1, Complejo $c2)
		{
			return new Complejo($c1->re + $c2->re, $c1->im + $c2->im);
		}

		static function Restar(Complejo $c1, Complejo $c2)
		{
			return new Complejo($c1->re - $c2->re, $c1->im - $c2->im);
		}

		function __toString()
		{
			return $this->re . " + " . $this->im . "i";
		}
	}

	$c1 = new Complejo(1, -2);
	$c2 = new Complejo(3, 5);
	$c3 = Complejo::Sumar($c1, $c2);
	$c4 = Complejo::Restar($c2, $c1);

	echo "$c1\n$c2\n"; 
?>
