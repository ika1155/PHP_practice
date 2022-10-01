<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-7</title>
</head>
<body>
	<div class="container">
	<?php
	$product = array(
		'product_name' => 'みかん',
		'product_area' => '愛媛県',
		'quality' => '優',
		'price' =>3000
	);
	echo'<table border="1">';
	foreach ($product as $key => $value)
	{
		echo '<tr><td>'.$key.'</td>'.'<td>'.$value.'</td></tr>';
	}
	echo '</table>';
	?>
		
	</div>
</body>
</html>