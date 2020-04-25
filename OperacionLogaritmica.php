<?php
	$ref = 0.001;
	$p   = 1.0;
	$r   = $p / $ref;
	$db  = 10 * log10($r);
	echo $db . " dBm";
?>
