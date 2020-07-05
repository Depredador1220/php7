<?php
	$patron = "*";

	$archivos = glob($patron);

	foreach ($archivos as $archivo) 
	{
		echo $archivo;

		if(is_dir($archivo))
		{
			echo "/";
		}

		echo "<br>";
	}
?>
