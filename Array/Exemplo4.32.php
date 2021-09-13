<?php 
/*Exemplo 4.32 - Iterando por um array multidimensional com for()*/

$specials = array(array('Chesnut Bun', 'Walnut Bun', 'Peanut Bun'),
	              array('Chesnut Salad', 'Walnut Salad', 'Peanut Salad'));




// $num_specials é 2: o número de elementos da primeira dimensão de $specials
for($i = 0, $num_specials = count($specials); $i < $num_specials; $i++)
{

//$num_sub é 3: o número de elementos de cada subarray
for($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++)
{

print "Element [$i][$m] is " . $specials[$i][$m] . "</br>";

}


}


//$num_specials = 0, 1;
//$i = 0,1;
//$num_sub = 0, 1, 2;
//$m = 0, 1, 2;












?>