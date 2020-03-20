<?php
	class baseDatos
	{
		protected $host;
		protected $usuario;
		protected $password;

		function __construct($host, $usuario, $password)
		{
			$this->host = $host;
			$this->usuario = $usuario;
			$this->password = $password;
		}
	}

	$bd = new baseDatos('localhost', 'Depredador1220', "secreta");
	var_dump($bd);

	class baseDatos2
	{
		protected $host;
		protected $usuario;
		protected $password;

		function __construct($host, $usuario, $password)
		{
			$this->host = $host;
			$this->usuario = $usuario;
			$this->password = $password;
		}

		function __debugInfo()
		{
			return array('host'=>$this->host,);
		}
	}

	$bd = new baseDatos2('localhost', 'Kencho', 'secreto');
	var_dump($bd);
?>
