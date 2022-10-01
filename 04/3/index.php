<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>04-3</title>
</head>
<body>
	<div class="container">
	<?php 
	$menus = ["0" =>'Aランチ',
	"1" =>'Bランチ',
	2 =>'Cランチ',
	3 =>'唐揚げ定食',
	4 =>'とんかつ定食',
	5 =>'エビフライ定食',
	6 =>'オムライス',
	7 =>'カレーライス',
	8 =>'ごはん大',
	9 =>'ごはん小',
	10 =>'ビール',
	11 =>'烏龍茶'];

	echo '<table border="1">';

	foreach ($menus as $key => $menu){
		echo '<tr>
		<td>'.$key.'</td>
		<td>'.$menu.'</td>
		</tr>';
	}
	echo '</table>';
	?>
	</div>
</body>
</html>