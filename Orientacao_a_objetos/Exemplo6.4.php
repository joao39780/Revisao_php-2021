<?php 
/*Exemplo6.4 - Chamando um método estático*/

// Para chamar um método estático, é preciso inserir pontos duplos (::) entre o nome da classe e o nome do método em vez de ->.


include 'Exemplo6.3.php';

$sizes = Entree::getSizes();



foreach($sizes as $value){

print "$value</br>";

}






?>