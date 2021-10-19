<?php 

require_once 'Exemplo8.2.php';

$dish_search = $_GET['dish_search'];

try{

	$stmt = $db->prepare('SELECT*FROM dishes WHERE dish_name LIKE ?');
	$stmt->execute(array($dish_search));


}catch(PDOException $e){
	print "couldn't get a row: " . $e->getMessage();
}

print "<table>";

foreach($stmt as $key => $value){

	print "<tr><td>$value[1]</td></tr>";
}
print "</table>";
?>