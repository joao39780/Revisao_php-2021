<?php 
/*Exemplo4.22 - Exibindo as linhas de uma tabela */

//Você pode usar implode() para simplificar a exibição das linhas de uma tabela HTML

$dimsum = array('Chicken Bun', 'Stuffed Duck Web', 'Turnip Cake');

print '<tr></td>' . implode('</td><td>', $dimsum) . '</td></tr>';
























?>