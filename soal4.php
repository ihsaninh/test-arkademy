<?php 

$arrays = [
			['a','c','b','e','d'],
			['g','e','f']
];

function sortArray($arrays) {
	sort($arrays);
	foreach ($arrays as $array) {
		array_multisort($array);
		var_dump($array);
	}
}

sortArray($arrays);

?>