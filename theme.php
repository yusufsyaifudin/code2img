<?php

$csv = file_get_contents("theme.csv");
$csv = trim($csv);

$parse = explode(',', $csv);

foreach ($parse as $key) {
	echo '<option value="' . trim($key) . '">' . trim(strtolower($key)) . "</option>\n";
}

// var_dump($parse);

?>