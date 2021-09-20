<?php 
/*Exemplo6.7 - Lançando uma exceção*/

// Os construtores são ótimos para verificar se os argumentos fornecidos têm o tipo certo, ou pelo menos apropriado. No entanto precisam de uma maneira de avisar se houver algum problema. É nesse momento que uma exceção pode ajudar. Uma exceção é um objeto especial que pode ser usado para indicar que algo excepcional ocorreu. A criação de uma exceção interrompe o engine PHP eo transfere para um caminho diferente no código.


class Entree{

	public $name;
	public $ingredients = array();

	public function __construct($name $ingredients){

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












?>