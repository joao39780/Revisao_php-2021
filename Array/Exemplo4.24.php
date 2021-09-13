<?php 
/*Exemplo4.24 - Classificando com sort()*/

//A função sort() classifica um array pelos valores de seus elementos. Elas só deve ser usada em arrays numéricos, porque redefine as chaves do array ao fazer a classificação



$dinner = array('Sweet Corn and Aspargus',
			    'Lemon Chicken',
			    'Braised Bamboo Fungus');



$meal = array('breakfast' => 'Walnut Bun',
			  'lunch' => 'Cashew Nuts and White Mushrooms',
			  'snack' => 'Dried Mulberries',
			  'dinner' => 'Eggplant with Chili Sauce');




print "<h3 style='text-align:center;'>Before Sorting</h3></br>";

print "<table>";

foreach($dinner as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";

}



print "</table>";

print "</br>";


print "<table>";
foreach($meal as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";


}

print "</table>";


print "<hr>";


sort($dinner);
sort($meal);


print "<h3 style='text-align:center;'>After Sorting</h3></br>";

print "<table>";

foreach($dinner as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";

}



print "</table>";

print "</br>";


print "<table>";
foreach($meal as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";


}

print "</table>";





?>