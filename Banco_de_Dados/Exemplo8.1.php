<?php 

try{
$db = new PDO('mysql:host=localhost;dbname=db_restaurant', 'admin', 'admin');

}catch(Exception $e){

	"Couldn't connect to the database" . $e->getMessage();
}

?>