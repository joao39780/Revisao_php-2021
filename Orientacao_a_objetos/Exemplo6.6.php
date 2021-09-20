<?php 
/*Exemplo6.6 - Chamando construtores*/

//Para passar argumentos para o construtor, trate o nome da classe como um nome de função ao chamar o operador new inserindo parênteses e os valores dos argumentos depois dele. 

include 'Exemplo6.5.php';

// sopa com nome e ingredientes
$soup = new Entree('Chicken Soup', array('chicken', 'water'));


// sandwich com nome e ingredientes
$sandwich = new Entree('Chicken Sandwich', array('chicken', 'bread'));


?>