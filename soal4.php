<?php 
$arrays = [
			['a','c','b','e','d'],
			['g','e','f'],
			['t', 'u', 'v', 'w'],
			['h', 'i', 'j', 'k', 'l', 'm']
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