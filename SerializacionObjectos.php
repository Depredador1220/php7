<?php
	class BaseDeDatos
	{
		protected $pdo;
		private $dsn, $usuario, $password;

		public function __construct($dsn, $usuario, $password)
		{
			$this->dsn = $dsn;
			$this->usuario = $usuario;
			$this->password = $password;
			$this->conectar();
		}

		private function conectar()
		{
			$this->pdo = new PDO($this->dsn, $this->usuario, $this->password);
		}

		public function __sleep()
		{
			return array('dsn', 'usuario', 'password');
		}

		public function __wakeup()
		{
			$this->conectar();
		}
	}

	$bd = new BaseDeDatos('sqlite:mibd', 'Depredador1220', '123456');

	$a = serialize($bd);
	echo $a;
?>
