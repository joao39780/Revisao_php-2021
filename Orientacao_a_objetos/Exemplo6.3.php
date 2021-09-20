<?php 
/*Exemplo6.3 - Definindo um método estático*/

//As classes também podem conter métodos estáticos. Esses métodos não podem usar a variável $this, já que não são executados no contexto de uma instância de objeto específica e sim na propria classe. Os métodos estáticos são úteis para comportamentos que sejam relevantes para a finalidade da classe e não para algum objeto.


class Entree{

	public $name;
	public $ingredients = array();

	public function hasIngredient($ingredient){

		return in_array($ingredient, $this->ingredients);
	}

	public static function getSizes(){

		return array('small', 'medium', 'large');
	}
}






?>