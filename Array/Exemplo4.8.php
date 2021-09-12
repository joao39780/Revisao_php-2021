<?php 
/*Exemplo4.8 - Loop with foreach()*/

//A maneira mais fácil de iterar por cada elemento de um array é com foreach(). A estrutura foreach() permite executar um bloco de código uma vez para elemento do array.


$meal = array('breakfast' => 'Walnut Bun',
			  'lunch' => 'Cashew Nuts and White Mushrooms',
			  'snack' => 'Dried Mulberries',
			  'dinner' => 'Eggplant with Chili Sauce');



print "<table>";

foreach($meal as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";

}

print "</table>";

























?>