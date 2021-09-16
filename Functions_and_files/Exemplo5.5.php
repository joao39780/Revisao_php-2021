<?php 
/*Exemplo5.5 - Especificando um valor padrão */

//Para especificar um valor padrão, insira-o após o nome do argumento.


function page_header3($color = 'grey')
{

	print '<html><head><title>Welcome to my site</title></head>';
	print '<body bgcolor="'. $color .'">';


}


page_header3();


?>