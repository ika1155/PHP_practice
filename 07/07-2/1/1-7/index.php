<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-2-1-7</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
	require_once('Animal.php');
	require_once('Dog.php');
	require_once('Cat.php');

	$animals = 
	[
		new Dog('ぽち',5),
		new Cat('たま',3),
		new Dog('いぬ',1),
		new Cat('ねこ',8)
	];
	
	foreach($animals as $animal)
	{
		$animal->speak();
	}
	?>
		
	</div>
</body>
</html>