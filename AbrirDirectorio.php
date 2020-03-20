<?php
	$ruta = "./";

	//Abre una carpeta conocida y lee el contenido
	if(is_dir($ruta))
	{
		if($dh = opendir($ruta))
		{
			while(($archivo = readdir($dh)) !== false)
			{
				echo "Nombre Archivo: $archivo : Tipo de archivo: " . filetype($ruta . $archivo) . "\n";
			}

			closedir($dh);
		}
	}
?>
