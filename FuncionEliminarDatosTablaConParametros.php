<?php
	
	$con = mysqli_connect('localhost','root','');	

	if($con)
	{
		mysqli_select_db($con, 'samples');				
	}	

	function EliminarDatosTabla($tabla, $ids)
	{
		global $con;		

		if($con)
		{
						

			$where = "";

			if(is_array($ids) && sizeof($ids))
			{				
				$strids = implode(", ", $ids);				
				$where = " where id in({$strids})";				
			}			

			mysqli_query($con, "delete from {$tabla}{$where};");
		}

		else
		{
			echo "No se pudo conectar a la base de datos";
		}	
	}	

	EliminarDatosTabla('mytable', [31, 33, 35]);
	mysqli_close($con);
?>
		
