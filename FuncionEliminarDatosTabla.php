<?php
	function EliminarDatosTabla()
	{
		$con = mysqli_connect('localhost','root','');

		if($con)
		{
			mysqli_select_db($con, 'samples');
			mysqli_query($con, "delete from mytable");
			mysqli_close($con);
		}

		else
		{
			echo "No hay conexion a la base de datos";
		}
	}

	EliminarDatosTabla();
?>
