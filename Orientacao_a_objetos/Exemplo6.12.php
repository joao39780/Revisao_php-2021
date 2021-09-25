<?php
/*Exemplo6.12 - Inserindo um construtor em uma subclasse*/

//Isso funciona bem, mas não temos garantia de que os itens passados para o construtor de ComboMeal são realmente objetos Entree. Se não forem, chamar hasIngredient() neles pode causar um erro. Para corrigir esse problema, precisamos adicionar um construtor personalizado a ComboMeal que verifique essa condição e também chame o construtor comum de Entree para que as propriedades sejam definidas apropriadamente.

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

	public function __construct($name, $entrees){

		parent::__construct($name, $entrees);

		foreach($entrees as $entree){

			if(! $entree instanceof Entree){
		
				throw new Exception('Elements of $entrees must be Entree objects');
			}
		}
	}

	public function hasIngredient($ingredient){

		foreach($this->ingredients as $entree){
			
			if($entree->hasIngredient($ingredient)){	
	    	
	    		return true;	
	    	}
	    }
		return false;
	}
}

/*

parent::
Assim como $this tem um significado próprio dentro dos métodos de objetos, o mesmo ocorre com a palavra parent. Ela referencia a classe da qual a classe atual é
subclasse. já que ComboMeal estende Entree, parent dentro de ComboMeal referencia Entree. Logo, parent::__construct() dentro de ComboMeal referencia o método 
__construct() da classe Entree.

instanceof
Após a chamada a parent::__construct(), o construtor de ComboMeal verifica se cada ingrediente fornecido para o combo é um objeto Entree. Ele usa o operador instceof para fazê-lo. A expressão $entree instanceof Entree será avaliada como true se $entree referenciar uma instância de objeto da classe Entree. Se algum
dos ingredientes fornecidos (que, para um ComboMeal, são entradas) não for um objeto Entree, o código lançará uma exceção.
*/
?> 