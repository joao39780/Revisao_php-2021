<?php 
/*Exemplo4.21 - Criando uma string a partir de um array com implode() */

//Quando você quiser exibir de uma vez todos os valores existentes em um array a maneira mais rápida é usar a função implode(). Ela cria uma string combinando todos os valores do array, inserindo um delimitador entre cada valor.


$dimsum = array('Chicken Bun', 'Stuffed Duck Web', 'Turnip Cake');

$menu = implode(',', $dimsum);

print $menu;
























?>