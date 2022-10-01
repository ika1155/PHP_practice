<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-2</title>
</head>
<body>
	<div class="container">
	<?php 
	$menus = ['Aランチ','Bランチ','Cランチ','唐揚げ定食',
	'とんかつ定食','エビフライ定食','オムライス','カレーライス',
	'ごはん大','ごはん小','ビール','烏龍茶'];

	echo '<table border="1">';

	foreach ($menus as $menu){
		echo '<tr><td>'.$menu.'</td></tr>';
	}
	echo '</table>';
	?>
	</div>
</body>
</html>