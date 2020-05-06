<?php
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
	print_r($personas);
?>
