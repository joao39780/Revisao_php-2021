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

2. Adicione um método a sua classe IngredientCost que altere o custo de um ingrediente.
	
		public function IgredientCost($price){

		$this->price = $price;
		}

3.  Crie uma subclasse da classe Entree usada nesse capítulo que aceite objetos Ingredients em vez de nomes no formato string para específicar os ingredientes. Forneça para sua
    subclasse Entree um método que retorne o custo total do prato.
	
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
		
4. Insira sua classe Ingrediente em seu próprio namespace e modifique o código que usa IngredientCost para funcionar apropriadamente.
	
			namespace meal;

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
