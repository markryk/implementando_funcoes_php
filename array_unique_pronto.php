<?php
	//$arr = [1, 2, 3, 4, 1, 3, 5, 8, 7, 8, 6];
	$arr = [1, 2, 3, 2, 1, 4, 5, 6, 5, 4, 'a', 'a', 'b', 'c', 'a', '1', "1", '7'];
	//$arr = [5, 5, 5, 5, 5];
	echo "Array: ";
	foreach ($arr as $a) echo $a." ";
	echo "<br>";
	echo "Array único: ";
	//Função array_unique() [predefinida pelo PHP]
	$arr_unq = array_unique($arr);
	foreach ($arr_unq as $u) echo $u." ";
?>