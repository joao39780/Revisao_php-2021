<?php 
/*Exemplo6.5 - Inicializando um objeto com um construtor*/

//Uma classe pode ter um método especial, chamado construtor, que é executado quando o objeto é criado. Normalmente, os construtores manipulam tarefas de configuração e manutenção que tornam o objeto pronto para uso.


class Entree{

	public $name;
	public $ingredients = array();


	public function __construct($name, $ingredients){

		$this->name = $name;
		$this->ingredients = $ingredients;	
	}

	public function hasIngredient($ingredient){

		return in_array($ingredient, $this->ingredients);
	}

}










?>