<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF'])?>">
	<table>
		<?php if($errors){ ?>
			<tr>
				<td>You need to correct the following errors:</td>
				<td><ul>
					<?php foreach($errors as $error) ?>
					<li><?= $form->encode($error) ?></li>

		<?php }  ?>
	</ul></td>

	<tr>
		<td>Dish Name:</td>
		<td><?= $form->input('text', ['name' => 'dish_name']) ?></td>
	</tr>

	<tr>
		<td>Price:</td>
		<td><?= $form->input('text', ['name' => 'price']) ?></td>
	</tr>

	<tr>
		<td>Spicy:</td>
		<td><?= $form->input('checkbox', ['name' => 'is_spicy',
										   'value' => 'yes']) ?>Yes</td>
	</tr>	
	<tr><td colspan="2" align="center">
		
		<?= $form->input('submit',['name' => 'save', 'value' => 'Order']) ?>
	</tr></td>

</table>
</form>
</body>
</html>
