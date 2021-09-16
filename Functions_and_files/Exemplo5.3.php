<?php 
/*Exemplo5.3 - Definindo funções antes ou depois de chamá-las*/

//As funções podem ser definidas antes ou depois de serem chamadas. O engine PHP lê o arquivo do programa inteiro e toma conhecimento de todas  as definições de funções antes de executar qualquer comando existente no arquivo


function page_header(){


	print '<html><head><tittle style="color:white;">Welcome to my site</tittle></head></br>';

	print '<body bgcolor="grey">';


}


page_header();

print "Welcome, user";

page_footer();


function page_footer(){


	print '<hr>Thanks for visiting';

	print '</body></html>';
}


?>