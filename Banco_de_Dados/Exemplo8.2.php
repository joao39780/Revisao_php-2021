<?php 

try{

	$db = new PDO('mysql:host=localhost;dbname=db_restaurant', 'admin', 'admin');

}catch(PDOException $e){

	print "Couldn't connect to the database". $e->getMessage();
}

?>