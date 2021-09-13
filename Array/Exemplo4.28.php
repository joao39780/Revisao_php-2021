<?php 
/*Exemplo4.28 - Criando arrays multidimensionais com array() e []*/


//Use a estrutura array() ou a sintaxe curta dos arrays para criar arrays que tenham outros arrays como valores dos elementos.

$meals = array('breakfast' => ['Walnut Bun', 'Coffee'],
			   'lunch' => ['Cashew Nuts', 'White Mushrooms'],
			   'snack' => ['Dried Mulberries', 'Salted Sesame Crab']);



$lunches = [['Chicken', 'Eggplant', 'Rice'],
			['Beef', 'Scallions', 'Noodles'],
			['Eggplant', 'Tofu']];


$flavors = array('Japanese' => array('Hot' => 'Wasabi',
									 'Salty' => 'Soy Sauce'),
				 'Chinese' => array('Hot' => 'Mustard',
								    'Pepper-Salty' => 'Prickly Ash'));








print "<table>";
foreach($flavors as $key => $value)
{

foreach($value as $sub_key => $sub_value)
{
	print "<tr><td>$key</td><td>$sub_key</td><td>$sub_value</td></tr>";
}

}
print "</table>";






?>