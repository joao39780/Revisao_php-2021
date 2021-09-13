<?php 
/*Exemplo4.27 - Classificando com asort()*/


//As funções de classificação reversa se chamam rsort(), arsort() e ksort(). Elas funcionam de maneira idêntica a sort(), arsort() e ksort(), execeto por classificar os arrays de modo que a chave ou o valor maior seja o primeiro no array classificado, com os elementos subsequentes sendo organizados em ordem decrescente.


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

arsort($meal);

print "<h3 style='text-align:center;'>After Sorting</h3></br>";

print "<table>";
foreach($meal as $key => $value)
{

print "<tr><td>$key</td><td>$value</td></tr>";


}
print "</table>";



















?>