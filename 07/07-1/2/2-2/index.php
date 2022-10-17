<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-1-2-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
	require_once('CoinCase.php');
	
	$coin = new CoinCase();

	$coin->addCoins(500,3);
	$coin->addCoins(5,2);
	$coin->addCoins(1,5);
	$coin->addCoins(100,1);
	$coin->addCoins(50,1);
	$coin->addCoins(10,1);
	$coin->addCoins(100,2);
	$coin->addCoins(500,1);
	$coin->addCoins(5,4);
	$coin->addCoins(50,1);

	echo '<p>500円玉は'.$coin->getCount(500).'枚</p>';
	echo '<p>100円玉は'.$coin->getCount(100).'枚</p>';
	echo '<p>50円玉は'.$coin->getCount(50).'枚</p>';
	echo '<p>10円玉は'.$coin->getCount(10).'枚</p>';
	echo '<p>5円玉は'.$coin->getCount(5).'枚</p>';
	echo '<p>1円玉は'.$coin->getCount(1).'枚</p>';
	
	echo '<p>総額は'.$coin->getAmount().'円です。</p>'
	
	?>
		
	</div>
</body>
</html>