<?php
	$num = $_POST['num'];

	$ceil = ceil($num);
	$floor = floor($num);
	$round = round($num);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>05-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<!-- my-5　上下のマージンを3rem　全てのアイテムの左右中央揃え -->
	<div class ="row my-5 justify-content-center">
		<!-- グリッドシステム　md=PC   
		画面幅がMiduim以上のときはグリッドを4個持つカラムを生成-->
	<div class="col-md-5">
		<table class="table table-bordered">
			<tr>
				<th>切り上げ</th>
				<th>切り捨て</th>
				<th>四捨五入</th>
			</tr>
			<tr>
				<td><?= $ceil ?></td>
				<td><?= $floor ?></td>
				<td><?= $round ?></td>
			</tr>
		</table>
	</div>
	</div>
</div>
</body>
</html>