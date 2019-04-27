<?php 

$arrays = [
			['a','c','b','e','d'],
			['g','e','f']
];

function sortArray($arrays) {
	array_multisort($arrays);
	return $arrays;
}

var_dump(sortArray($arrays));

?>