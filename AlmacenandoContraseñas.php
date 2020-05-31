<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "samples");

	function CreateUser($login, $password)
	{
		global $con;
		$login = mysqli_escape_string($con, $login);
		$password = mysqli_escape_string($con, password_hash($password, PASSWORD_BCRYPT));
		mysqli_query($con, "insert into myusers(login, password) values('{$login}', '{$password}')");
	}

	function CheckUser($login, $password)
	{
		global $con;
		$user = null;
		$login = mysqli_escape_string($con, $login);

		$rs = mysqli_query($con, "select * from myusers where login = '{$login}'");

		if($rs)
		{
			$user = mysqli_fetch_assoc($rs);

			if($user && !password_verify($password, $user['password']))
			{
				$user = null;
			}

			mysqli_free_result($rs);
		}

		return $user;
	}

	CreateUser('kenny_2603@hotmail.com', 'secreta');

	if(CheckUser('kenny_2603@hotmail.com', 'secreta'))
	{
		echo "El usuario existe y la contraseña es correcta<br>";
	}

	else
	{
		echo "El usuario no existe o la contraseña es incorrecta<br>";
	}
?>
