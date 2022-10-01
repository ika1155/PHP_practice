<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-5</title>
</head>
<body>
	<div class="container">
	
	<?php 
		if(isset($_POST['menu'])){
			$menu = $_POST['menu'];
			echo 'お選びになったメニューはこちらです。<br>';
			echo $menu.'<br>';
		}
		echo '<a href="index.html">戻る</a><br>';
	?>
		
	</div>
</body>
</html>