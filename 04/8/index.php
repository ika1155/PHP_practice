<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-8</title>
</head>
<body>
	<div class="container">
	<?php
	$products = array(
		0 => array(
			'product_name' => 'みかん',
			'product_area' => '愛媛県',
			'quality' => '優',
			'price' =>3000
		),

		1 => array(
			'product_name' => 'りんご',
			'product_area' => '青森県',
			'quality' => '優',
			'price' =>5000
		),

		2 => array(
			'product_name' => 'バナナ',
			'product_area' => 'フィリピン',
			'quality' => '優',
			'price' =>1500
		)
	);
	echo'<table border="1">
		<tr><th>品名</th><th>産地</th><th>品質</th><th>価格（円）</th></tr>';
	
	foreach ($products as $id => $values)
	{
		echo '<tr>';
		foreach ($values as $key => $value){
			echo '<td>'.$value.'</td>';	
		}
		echo '</tr>';
	}
	echo '</table>';
	?>
		
	</div>
</body>
</html>