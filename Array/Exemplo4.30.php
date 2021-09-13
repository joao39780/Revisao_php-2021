<?php 
/*Exemplo4.30 - Manipulando arrays multidimensionais*/


//Você também pode criar ou modificar arrays multidimensionais com a sintaxe de colchetes

$prices['dinner']['Sweet Corn and Aspargus'] = 12.50;
$prices['lunch']['Cashew Nuts and White Mushrooms'] = 4.95;
$prices['dinner']['Braised Bamboo Fungus'] = 8.95;

$prices['dinner']['total'] = $prices['dinner']['Sweet Corn and Aspargus'] + $prices['dinner']['Braised Bamboo Fungus'];

print $prices['dinner']['total'];

$specials[0][0] = 'Chesnut Bun';
$specials[0][1] = 'Walnut Bun';
$specials[0][2] = 'Peanut Bun';
$specials[1][0] = 'Chesnut Salad';
$specials[1][1] = 'Walnut Salad';

//Deixar o índice de fore adiciona o fim do array

//Essa instrução cria $specials[1][2]

$specials[1][] = 'Peanut Salad';










?>