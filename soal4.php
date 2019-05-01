<?php 
$arrays = [
			['a','c','b','e','d'],
			['g','e','f'],
			['u', 't', 'v', 'u', 'w'],
			['h', 'j',' m', 'k', 'i','l']
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