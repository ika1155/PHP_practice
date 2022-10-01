<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-1</title>
</head>
<body>
	<div class="container">
	<?php 
		$fruit = ['みかん','りんご','メロン','バナナ','パイナップル'];
		echo '<ul>';
		for ($i = 0; $i < 5; $i++)
		{
			echo '<li>'.$fruit[$i].'</li>';
		}
		echo '</ul>';
	?>
		
	</div>
</body>
</html>