<?php
	class logeo
	{
		private $fp;

		function __construct($nombre_archivo)
		{
			$this->fp = fopen($nombre_archivo, "at");
		}

		function __destruct()
		{
			$this->log("Archivo log cerrado");

			if($this->fp)
			{
				fclose($this->fp);
			}
		}

		function log($mensaje)
		{
			if($this->fp)
			{
				$t = date("c");
				fwrite($this->fp, "{$t} {$mensaje}\n");
			}
		}
	}

	$logeo = new logeo("log.txt");
	$logeo->log("Evento");
?>
