<?php

	function arrays_repetidos($array){
	$b = [];
		array_walk_recursive($array, function($array) use (&$b) {
  			$b[] = $array;
		});

	$repetidos = array_keys(
               array_filter(
                 array_count_values($b), function($v, $k) {
                   return $v > 1;
               }, ARRAY_FILTER_USE_BOTH)
             );
	}

	return $repetidos;

?>
