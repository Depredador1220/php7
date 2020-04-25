<?php
	define("RADIO_KM", 6371);
	define("RADIO_MILLAS", 3959);

	function Pos2Distancia($pos1, $pos2, $unidad = RADIO_KM, $precision = 0)
	{
		$lon1 = deg2rad($pos1['lon']);
		$lat1 = deg2rad($pos1['lat']);
		$lon2 = deg2rad($pos2['lon']);
		$lat2 = deg2rad($pos2['lat']);

		$d = acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($lon2 - $lon1));

		return round($d * $unidad, $precision);
	}

	$p1 = array("lon" => -74.0059, "lat" => 40.7128);
	$p2 = array("lon" => -118.2437, "lat" => 34.0522);

	echo "Distancia de Nueva York a Los Angeles: " . Pos2Distancia($p1, $p2) . " km";
?>
