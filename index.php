<?php

function checkTemperature($temperatura) {
	$result = " ";
	if ($temperatura==(-30) || $temperatura<=-20) {
		$result = "Labai šalta";
	} elseif ($temperatura<=5) {
		$result = "Šalta";
	} elseif ($temperatura<=20) {
		$result = "Šilta";
	} elseif ($temperatura<=25) {
		$result = "Karšta";
	} elseif ($temperatura> 25) {
		$result = "Labai karšta";
	}
	return $result;
}

include "templates/main.php";
?>
	


