<?php
/*Exemplo5.4 - Declarando uma função com um argumento*/

//Os valores das entradas fornecidos para funções são chamados de argumentos. Os argumentos aumentam o poder das funções porque as tornam mais flexíveis. Você pode modificar page_header() para que receba um argumento contendo a cor da página.



function page_header2($color, $string)
{

	print '<html><head><title>'. $string .'</title></head>';
	print '<body bgcolor="#'. $color .'" >';

}



//Você adicionou $color entre parênteses à declaração após o nome da função. Isso permite que o código existente dentro da função use uma variável chamada $color que contém o valor passado para função quando ela é chamada. Por exemplo você poderia chamar a função dessa forma:

page_header2('FF5733', 'Howdy Stranger');





















?>