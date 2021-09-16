<?php 
/*Exemplo5.3 - Definindo funções antes ou depois de chamá-las*/

//


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