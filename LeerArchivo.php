<?php
	$f = "";
	$fp = fopen('file.txt', 'r');

	if($fp)
	{
		while($s = fread($fp, 100))
		{
			$f .= $s;
		}

		fclose($fp);
	}

	var_dump($f);
?>
