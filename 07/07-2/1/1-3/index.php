<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-2-1-3</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
	require_once('Dog.php');
	require_once('Cat.php');

	$dog = new Dog('ぽち',5);

	$cat = new Cat('たま',3);

	$dog->showProfile();
	$dog->run();

	$cat->showProfile();
	$cat->sleep();
	?>
		
	</div>
</body>
</html>