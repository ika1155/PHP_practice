<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-4</title>
</head>
<body>
	<div class="container">
	
	<?php 
		if(isset($_POST['menu'])){
			$menus = $_POST['menu'];
			echo 'お選びになったメニューはこちらです。';
			echo '<table border="1">';
			foreach ($menus as $menu){
				echo '<tr><td>'.$menu.'</tr></td>';
			}
			echo '</table>';
		}
		else{
			echo 'メニューが選択されていません。<br>';
			echo '<a href="index.html">戻る</a><br>';
		}
	?>
		
	</div>
</body>
</html>