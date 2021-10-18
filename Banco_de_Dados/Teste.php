<?php

require_once 'Exemplo8.2.php';

try{

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$row = $db->query("SELECT*FROM dishes");

}catch(PDOException $e){

	print "Couldn't get a row: ". $e->getMessage();
}


print "<table>";
print "<tr><td>ID</td><td>Name</td><td>price</td><td>is_spicy?</td></tr>";
foreach($row as $key => $value){

	print "<tr><td>$value[0]</td><td>$value[1]</td><td>$value[2]</td><td>$value[3]</td></tr>";
}
print "</table>"
?>