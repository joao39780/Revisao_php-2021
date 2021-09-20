<?php 
/*Exemplo6.2 - Criando e usando objetos*/

include 'Exemplo6.1.php';


// Cria uma instância e atribui a $soup
$soup = new Entree;

// Define as propriedades de $soup
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken', 'water');


//Cria outra instância e atribui a sandwich
$sandwich = new Entree;

//Define as propriedades de $sandwich
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array('chicken', 'bread');


foreach(['chicken', 'lemon', 'bread', 'water'] as $ing){

 if($soup->hasIngredient($ing)){

 	print "soup contains $ing</br>";
 }

if($sandwich->hasIngredient($ing)){

	print "sandwich contains $ing</br>";
}

}

?>