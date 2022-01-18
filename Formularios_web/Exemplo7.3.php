<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="Exemplo7.3.php">
<input type="text" name="product_id">
<select name="category">
<option value="ovenmitt">Pot Holder</option>
<option value="fryingpan">Frying Pan</option>
<option value="torch">Kitchen Torch</option>
</select>
<input type="submit" value="submit">
</form>
<hr>
Here are the submitted values:
<br>
product_id: <?php print $_POST['product_id'] ?? '' ?>
<br>
category: <?php print $_POST['category'] ?? '' ?>
</body>
</html>


