<?php 
/*Exemplo5.10 - Capturando um valor de retorno*/

//A ação que a função de exibição de cabeçalho que você viu neste capítulo executa é retornar alguma saída. Além de uma ação como exibir dados ou salvar informações em um banco de dados, as funções também podem calcular um valor chamado valor de retorno, que pode ser usado posteriormente em um programa. Para capturar o valor de retorno de uma função, atribuia a chamada da função a uma variável.


$number_to_display = number_format(321442019);

print "The population of the US is about: $number_to_display";



















?>