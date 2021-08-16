<?php
$logged_in = false;
$new_messages = false;
$emergency = false;

if($logged_in){
	// Essa instrução será executada se $logged_in for verdadeira
	print "Welcome aboard, trusted user.";

}elseif($new_messages){

//Essa instrução será executada se $logged_in for falsa, mas $new_messages for verdadeira

print "Dear stranger, there are new messages";

}elseif($emergency){

//Essa instrução será executada se if $logged_in e new messages forem falsas,
//mas $emergency for verdadeira
print "stranger, there are no new messages, but there is an emergency."; 

}else{

	//Essa instrução será executada se $logged_in, $new_messages e emergency forem falsas
	print "I don't know you, you have no messages, and there's no emergency";

}






?>