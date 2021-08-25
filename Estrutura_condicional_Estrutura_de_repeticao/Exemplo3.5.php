<?php 
/*Exemplo 3.5 - elseif() com else*/

//Podemos usar um else em conjunto com elseif() caso nemhuma das instruções seja verdadeira

if($logged_in)
{
	//essa instrução será executada se $logge_in for verdadeira
	print "Welcome aboard, trusted user";
}

elseif($new_messages)
{

//Essa instrução será executada se $logged_in for falsa, mas $new_messages for verdadeira
print "Dear stranger, there are new_messages";

}

elseif($emergency)
{

//Essa instrução será executada se $logge_in e $new_messages forem falsas, mas $emergency for verdadeira
print "stranger, there are no new messages, but there is an emergency";


}
else
{
	//Essa instrução será executada se $logged_in, $new_messages e $emergency forem falsas
	print "I don't know you, you have no messages, and there's no emergency.";

}
















?>