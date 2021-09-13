<?php 
/*Exemplo4.26 - Classificando com ksort()*/

//A função ksort() preserva os pares chave/valor, mas os ordena pela chave


$meal = array('breakfast' => 'Walnut Bun',
			  'lunch' => 'Cashew Nuts and White Mushrooms',
			  'snack' => 'Dried Mulberries',
			  'dinner' => 'Eggplant with Chili Sauce');





print "<h3 style='text-align:center;'>Before Sorting</h3></br>";

print "<table>";

foreach($meal as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";


}

print "</table>";


print "<hr>";

ksort($meal);

print "<h3 style='text-align:center;'>After Sorting</h3></br>";

print "<table>";
foreach($meal as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";


}
print "</table>";



?>