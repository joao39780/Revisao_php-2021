<?php 
/*Exemplo6.1 - Definindo uma classe*/

class Entree{

	public $name;
	public $ingredients;

	public function hasIngredient($ingredient){

		return in_array($ingredient, $this->ingredients);
	}

}










?>