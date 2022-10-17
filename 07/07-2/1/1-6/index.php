<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-2-1-6</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
	require_once('Animal.php');
	require_once('Dog.php');
	require_once('Cat.php');

	$dog = new Dog('ぽち',5);

	$cat = new Cat('たま',3);

	$dog->showProfile();
	$dog->run();
	$dog->speak();

	$cat->showProfile();
	$cat->sleep();
	$cat->speak();
	?>
		
	</div>
</body>
</html>