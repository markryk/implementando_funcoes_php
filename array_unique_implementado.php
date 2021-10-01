<?php
	//Possível forma de funcionamento da função array_unique();
	function array_uniq($arr){
		$arr_unq = array($arr[0]);

		for ($i=1; $i<count($arr); $i++){
			$possivel_unico = $arr[$i];
			$igual = true;
			for ($j=0; $j<count($arr_unq); $j++){
				if ($possivel_unico == $arr_unq[$j]){
					$igual = false;
					break;
				}
			}
			if ($igual) array_push($arr_unq, $possivel_unico);
		}		
		foreach ($arr_unq as $u) echo $u." ";
	}

	$arr = [1, 2, 3, 4, 1, 3, 5, 8, 7, 8, 6];
	$arr = [1, 2, 3, 2, 1, 4, 5, 6, 5, 4, 'a', 'a', 'b', 'c', 'a'];
	//$arr = [5, 5, 5, 5, 5];
	echo "Array: ";
	foreach ($arr as $a) echo $a." ";
	echo "<br>";
	echo "Array único: ";
	array_uniq($arr);
?>