<?php 
/*Exemplo4.10 - Modificando um array com foreach()*/

$meals = array('Walnut Bun' => 1,
			   'Cashew Nuts and Mulberries' => 4.95,
			   'Dried Mulberries' => 3.00,
			   'Eggplant with Chili Sauce' => 6.50);



foreach($meals as $key => $value)
{

$meals[$key] = $meals[$key] * 2;


}


print "<table>";
foreach($meals as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";

}
print "</table>";








?>