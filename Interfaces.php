<?php
	interface sort
	{
		function ascending();
		function decendding();
		function shuffle();
	}

	class records implements sort
	{
		private $data = array();

		function add($title)
		{
			$this->data[] = $title;
		}

		function ascending()
		{
			sort($this->data);
		}

		function decendding()
		{
			rsort($this->data);
		}

		function shuffle()
		{
			shuffle($this->data);
		}

		function get()
		{
			return $this->data;
		}
	}

	$beatles = new records();
	$beatles->add("Yellow Submarine");
	$beatles->add("Sgt. Pepper's Lonely Hearts Club Band");
	$beatles->add("Help");
	$beatles->add("Abbey Road");

	echo "Ascending\n";
	$beatles->ascending();
	print_r($beatles->get());

	echo "Decendding\n";
	$beatles->decendding();
	print_r($beatles->get());

	echo "Random\n";
	$beatles->shuffle();
	print_r($beatles->get());
?>
