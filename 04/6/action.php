<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-6</title>
</head>
<body>
	<div class="container">
	
	<?php 

		$menus = $_POST['menus'];
		echo 'お選びになったメニューはこちらです。<br>';
		echo '<table border="1">';
		foreach ($menus as $menu){
			echo '<tr><td>'.$menu.'</td></tr>';
		}
		echo '</table>';
		echo '<a href="index.html">戻る</a><br>';
	?>
		
	</div>
</body>
</html>