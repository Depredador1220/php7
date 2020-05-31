<?php
	$f = "";
	$fp = fopen('file.txt', 'at');

	if($fp)
	{
		fwrite($fp, "Pero no soy rico");
		fclose($fp);
	}
?>
