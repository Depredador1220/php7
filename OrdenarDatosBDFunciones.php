<?php
	function OrdernarNombre($a, $b)
	{
		if($a['first_name'] == $b['first_name'])
		{
			return 0;
		}

		elseif ($a['first_name'] > $b['first_name']) 
		{
			return 1;
		}

		else
		{
			return -1;
		}
	}

	function OrdenarApellido($a, $b)
	{
		if($a['last_name'] == $b['last_name'])
		{
			return 0;
		}

		elseif ($a['last_name'] > $b['last_name']) 
		{
			return 1;
		}

		else
		{
			return -1;
		}
	}

	function OrdenarFechaNacimiento($a, $b)
	{
		if($a['date_of_birth'] == $b['date_of_birth'])
		{
			return 0;
		}

		elseif ($a['date_of_birth'] > $b['date_of_birth']) 
		{
			return 1;
		}

		else
		{
			return -1;
		}
	}

	$con = mysqli_connect("127.0.0.1", "root", "", "samples");
	$rs = mysqli_query($con, "select * from person");

	if($rs)
	{
		$personas = array();

		while($row = mysqli_fetch_assoc($rs))
		{
			$personas[] = $row;		
		}

		mysqli_free_result($rs);
	}

	mysqli_close($con);
	echo "Por Nombre<br>";
	usort($personas, 'OrdernarNombre');
	print_r($personas);
	echo "<br><br>Por Apellido<br>";
	usort($personas, 'OrdenarApellido');
	print_r($personas);
	echo "<br><br>Por Fecha Nacimiento<br>";
	usort($personas, 'OrdenarFechaNacimiento');
	print_r($personas);
?>
