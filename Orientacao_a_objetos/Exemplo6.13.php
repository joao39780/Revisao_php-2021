<?php 
/*Exemplo6.13 - Alterando a visibilidade das propriedades*/

class Entree{

	private $name;
	protected $ingredients = array();

	getName(){
		return $this->name;
	}

	public function __construct($name, $ingredients){

		if(! is_array($ingredients)){

			throw new Exception("Ingredients must be an array");
			
		}

		$this->name = $name;
		$this->ingredients = $ingredients;
	}


	public function hasIngredients($ingredient){

		return in_array($ingredient, $this->ingredients);

	}



}

class ComboMeal extends Entree{


	public function __construct($name, $entrees){

		parent::__construct($name, $entrees);

		foreach($entrees as $entree){
			if(! $entree instanceof Entree){
				throw new Exception("Elements of $entrees must be Entree objects");
			}
		
		}
	

	}

	public function hasIngredients($ingredient){

		foreach($this->ingredients as $entree){

			if($entree->hasIngredients($ingredient)){

				return true;
			}
			
		}
		return false;
	}





}


?>