<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "samples");

	function GetFile($hash)
	{
		global $con;
		$file = null;
		$sql = "select * from files where hash = '{$hash}'";
		$rs = mysqli_query($con, $sql);

		if($rs)
		{
			$file = mysqli_fetch_row($rs);
			mysqli_free_result($rs);
		}

		return $file;
	}

	function SaveFile($filename)
	{
		global $con;
		$hash = hash_file("sha256", $filename);

		if(!GetFile($hash))
		{
			mysqli_query($con, "insert into files(hash, filename) values('{$hash}', '{$filename}')");
		}
	}

	SaveFile('main.php');
	SaveFile('lab.php');
	SaveFile('namespace.php');

	$rs = mysqli_query($con, "select * from files");

	if($rs)
	{
		while($row = mysqli_fetch_row($rs))
		{
			print_r($row);
		}

		mysqli_free_result($rs);
	}

	mysqli_close($con);
?>
