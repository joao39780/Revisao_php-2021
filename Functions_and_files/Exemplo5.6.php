<?php 
/*Exemplo5.6 - Definindo uma função de dois argumentos*/

//Ao definir uma função que aceite vários argumentos, você deve separar cada argumento com uma vírgula na declaração da função


function page_header4($color, $title)
{

	print '<html><head><title>Welcome to my '. $title .'</title></head>';

	print '<body bgcolor="# '. $color .'">';


}



page_header4('403B3A', 'brownie');


















?>