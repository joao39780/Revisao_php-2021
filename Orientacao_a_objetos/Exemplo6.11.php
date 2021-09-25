<?php 
/*Exemplo6.11 - Usando uma subclasse*/

//
include 'Exemplo6.10.php';

//Sopa com nome e ingredientes
$soup = new Entree('Chicken Soup', array('chicken', 'water'));

//Sandwich com nome e ingredientes
$sandwich = new Entree('Chicken Sandiwch', array('chicken', 'bread'));

//Refeição em combo
$combo = new ComboMeal('Soup + Sandiwch', array($soup, $sandwich));


foreach(['chicken', 'water', 'pickles'] as $ing){

	if($combo->hasIngredient($ing)){

		print "Something in the combo contains $ing</br>";
	}
}



?>