<?php 
require_once 'ClassIngredient.php';

class Entree{

	private $name;
	protected $ingredients = array();


	public function __construct($name, $ingredients){

		if(! is_array($ingredients)){
			throw new Exception("ingredients must be an array");
			
		}
	
		$this->name = $name;
		$this->ingredients = $ingredients;
	}


	public function hasIngredients($ingredients){

		return in_array($ingredients, $this->ingredients);
	}


}


class IngredientTotalCost Extends Entree{

	public function __construct($name, $ingredients){

		parent::__construct($name, $ingredients);

		foreach($ingredients as $entree){
			if(! $entree instanceof \meal\Ingredient){

				throw new Exception("Elements of Ingredients must be Ingredient objects");
				
			}
		}
	}

	public function TotalCost(){

		$cost = 0;
		foreach($this->ingredients as $entree){

			$cost += $entree->getPrice();
		}

		return $cost;
	}


}


?>