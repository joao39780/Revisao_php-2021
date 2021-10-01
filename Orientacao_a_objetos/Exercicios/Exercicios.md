# Exercicios

1. Crie uma classe chamada Ingredient. Cada instância dessa classe representa um único ingrediente. A instância deve registrar o nome do ingrediente e seu custo.

  class Ingredient{

	private $name;
	protected $price;

	public function __construct($name, $price){


		$this->name = $name;
		$this->price = $price;
	}


	public function getName(){

		return $this->name;
	}


	public function getPrice(){

		return $this->price;
	}


	public function IgredientCost($price){

		$this->price = $price;
	}


}
