<?php 
/*Exemplo6.10 - Estendendo a classe Entree*/

//Podemos resolver o problema de maneira mais sensata criando uma subclasse de Entree que receba instâncias de objetos Entree como ingredientes, e modificando o método hasIngredient() da subclasse para inspecionar os ingredientes dessas instâncias.

class Entree{

	public $name;
	public $ingredients = array();

	public function __construct($name, $ingredients){

		if(! is_array($ingredients)){

			throw new Exception('$ingredients must be an array');
			
		}
	
		$this->name = $name;
		$this->ingredients = $ingredients;

	}


	public function hasIngredient($ingredient){

		return in_array($ingredient, $this->ingredients);
  }
}


class ComboMeal extends Entree{

	public function hasIngredient($ingredient){

		foreach($this->ingredients as $entree){
			
			if($entree->hasIngredient($ingredient)){
			
				return true;
		  }
		}	
		return false;
	}	

}






?>