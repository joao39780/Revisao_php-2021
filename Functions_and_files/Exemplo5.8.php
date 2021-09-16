<?php 
/*Exemplo5.8 - Vários argumentos opcionais*/

//Você pode usar a mesma sintaxe de funções que recebem um único argumento em funções que recebam vários argumentos para representar seus valores-padrão. No entanto, os argumentos opcionais devem vir depois dos argumentos obrigatórios.



//Um argumento opcional: ele deve ser o último
function page_header5($color, $title, $header = 'Welcome')
{

	print '<html><head><title>'. $title .'</title></head>';

	print '<body bgcolor="# '. $color .' ">';

	print "<h1>$header</h1>";
}


//Maneiras aceitaveis de chamar essa função

page_header5('66cc99', 'my wonderful page'); //usa o valor padrão de header

page_header5('66cc99', 'my wonderful page', 'This page is great!'); //sem padrões


//Dois argumentos opicionais: eles devem ser os dois últimos argumentos
function page_header6($color, $title = 'the page', $header = 'Welcome')
{

	print '<html><head><title>Welcome to '. $title .'</title></head>';

	print '<body bgcolor="# '. $color .'">';

	print "<h1>$header</h1>";
}


//Maneiras aceitaveis de chamar essa função

page_header6('66cc99'); //usa o valor-padrão de $title e $header

page_header6('66cc99', 'my wonderful page'); //usa o valor-padrão de $header

page_header6('66cc99', 'my wonderful page', 'This page is great!'); //sem padrões


// Todos os argumentos são opicionais
function page_header7($color = '336699', $title = 'the page', $header = 'Welcome')
{

	print '<html><head><title>'. $title .'</title></head>';

	print '<body bgcolor="# '. $color .'">';

	print "<h1>$header</h1>";
}


//Maneiras aceitaveis de chamar essa função

page_header7(); //usa todos os valores-padrão

page_header7('66cc99'); //usa os valores-padrão de $title e $header

page_header7('66cc99', 'my wonderful page!'); //usa o valor-padrão de $header

page_header7('66cc99', 'my wonderful page', 'This page is great!'); //sem padrões




?>