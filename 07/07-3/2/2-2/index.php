<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-4-2-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
	require_once('./Computer.php');
	require_once('./PersonalComputer.php');
	require_once('./SmartPhone.php');
	require_once('./TabletPC.php');
	
	$computers = [
		new PersonalComputer(),
		new TabletPC(),
		new SmartPhone(),
	];
	
	foreach ($computers as $computer) {
		$computer->showType();
		$computer->input();
		$computer->output();
		$computer->communication();
		echo '<p>--------------------------------------</p>';
	}
	?>
		
	</div>
</body>
</html>