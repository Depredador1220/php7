<?php
	class BaseDatos
	{
		protected $host;
		protected $usuario;
		protected $password;

		function __construct($host, $usuario, $password)
		{
			$this->host = $host;
			$this->user = $usuario;
			$this->password = $password;
		}
	}

	$bd = new BaseDatos("localshot", "Depredador1220", "Secreta");
	var_dump($bd);

	class BaseDatos2
	{
		protected $host;
		protected $usuario;
		protected $password;

		function __construct($host, $usuario, $password)
		{
			$this->host = $host;
			$this->user = $usuario;
			$this->password = $password;
		}

		function __debugInfo()
		{
			return array('host' => $this->host,);
		}
	}

	$bd = new BaseDatos2('localhost', 'Depredador1220', 'Secreta');
	var_dump($bd);
?>
