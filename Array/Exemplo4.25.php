<?php 
/*Exemplo4.25 - Classificando com asort()*/


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

asort($meal);

print "<h3 style='text-align:center;'>After Sorting</h3></br>";


print "<table>";
foreach($meal as $key => $value)
{


print "<tr><td>$key</td><td>$value</td></tr>";



}

print "</table>";



?>