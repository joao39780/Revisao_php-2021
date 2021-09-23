<?php 
/*Exemplo6.9 - Manipulando uma exceção*/

/*Para você mesmo manipular uma exceção é preciso duas etapas:
1. Inserir o código que pode lançar uma exceção dentro de um bloco try
2. Inserir um bloco catch que manipule o problema após o código que pode lançar a exceção

*/

include 'Exemplo6.7.php';

try{

	$drink = new Entree('Glass of Milk', 'milk');
	if($drink->hasIngredient('milk')){

		print "Yummy!";
    }

}catch(Exception $e){

	print "Couldn't creat the drink: " . $e->getMessage();
}


//cada uma das instruções do bloco try é executada e a execução para quando uma exceção é encontrada. Se isso ocorrer, o engine PHP pulará para baixo, para o bloco catch, configurando a variável $e para conter o objeto Exception que foi criado. O código do bloco catch usa método getMessage() da classe Exception para recuperar o texto da mensagem fornecida para a execução quando ela foi criada.



?>