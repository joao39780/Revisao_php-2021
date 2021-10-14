<?php

require 'Exemplo7.29.php';
require 'Exemplo8.2.php';

//Define exceções para erros do banco de dados
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Lógia da página principal
// - Se o formulário for enviado, valida processa ou exibe
// - Se ele não for enviado, é exibido
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//Se validate_form() retornar erros, eles serão passados para show_form()
	list($errors, $input) = validate_form();
	if($errors){
		show_form($errors);
	}else{
		//Os dados enviados são válidos, logo, são processados
		process_form($input);
	}

}else{

	//O formulário não foi enviado, logo, é exibido
	show_form();
}

function show_form($errors = array()){

	//Definição de nossos próprios padrões: price é $5
	$defaults = array('price' => '5.00');

	//Define o objeto form com padrões apropriados
	$form = new FormHelper($defaults);

	//A exibição do código HTML e do formulário está em um arquivo separado para
	//melhorar o entendimento
	include 'Exemplo8.29.php';
}

function validate_form(){

	$input = array();
	$errors = array();

	//dish_name é obrigatório
	$input['dish_name'] = trim($_POST['dish_name'] ?? '');
	if(! strlen($input['dish_name'])){
		$errors[] = 'Please enter the name of the dish.';
	}

	// o preço deve ser um número de ponto flutuante válido e deve ser maior que 0
	$input['price'] = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
	if($input['price'] <= 0){
		$errors[] = 'Please enter a valid price.';
	}


	// o padrão de is_spicy é 'no'
	$input['is_spicy'] = $_POST['is_spicy'] ?? 'no';
	return array($errors, $input);
}

function process_form($input){

	//Acessa a variável global db dentro dessa função
	global $db;

	//Define o valor de $is_spicy de acordo com a caixa de seleção
	if($input['is_spicy'] = 'yes'){

		$is_spicy = 1;
	}else{
		$is_spicy = 0;
	}

	//Insere o novo prato na tabela
	try{

		$stmt = $db->prepare('INSERT INTO dishes(dish_name, price, is_spicy)
									VALUES(?,?,?)');
		$stmt->execute(array($input['dish_name'], $input['price'], $is_spicy));

		//Tell the user that we added a dish
		print 'Added ' . htmlentities($input['dish_name']) . 'to the database';
	}catch(PDOException $e){
		print "Couldn't add you dish to the database";
	}
}


?> 