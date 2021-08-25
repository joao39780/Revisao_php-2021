<?php
/*Exemplo 3.4 - Usando elseif()*/

//Se a expressão de teste de if() for verdadeira, o engine PHP executará as instruções do bloco de código de if() e
//ingorará as cláusulas elseif() e seus blocos de códigos, mesmo que suas expressões de sejam verdadeiras.

//para um conjunto de expressões elseif() no máximo um dos blocos de código será executado, aquele que a expressão de teste for verdadeiro. 

$logged_in = false;
$new_messages = true;
$emergency = true;

if($logged_in)
{
 
 print "Welcome aboard trusted user";

//Essa instrução será executada se $logged_in for verdadeira
}
elseif($new_messages)
{
 
 print "Dear stranger, there are new messages";
//Essa instrução será executada $logged_in for falsa, mas $new_massages for verdadeira
}
elseif($emergency)
{

print "there are no new messages, but there is an emergency";

}









?>