<?php

$csv = file_get_contents("lang.csv");
$csv = trim($csv);

$parse = explode(',', $csv);

foreach ($parse as $key) {
	echo '<option value="' . trim($key) . '">' . trim(strtoupper($key)) . "</option>\n";
}

// var_dump($parse);

?>