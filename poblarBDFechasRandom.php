<?php
	$now = time();
	$dates = [];

	for($i = 0; $i < 100; $i++)
	{
		$dates[] = mt_rand(0, $now);
	}

	$con = mysqli_connect("127.0.0.1", "root", "", "samples");

	foreach ($dates as $d) 
	{
		$date = date("Y-m-d H:i:s", $d);
		mysqli_query($con, "insert into date_time(ts) values ('{$date}');");
	}

	mysqli_close($con);
?>
