<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];

	$max = max($num1, $num2, $num3);
	$min = min($num1, $num2, $num3);
	$avg = average($num1, $num2, $num3);

	function average($num1, $num2, $num3)
	{
		$ans = round (($num1 + $num2 + $num3) / 3);
		return $ans;
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>05-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<!-- my-5　上下のマージンを3rem　全てのアイテムの左右中央揃え -->
	<div class ="row my-5 justify-content-center">
		<!-- グリッドシステム　md=PC   
		画面幅がMiduim以上のときはグリッドを4個持つカラムを生成-->
	<div class="col-md-4">
		<table class="table table-bordered">
			<tr>
				<th>最大値</th><th>最小値</th><th>平均値</th>
			</tr>
			<tr>
				<td><?= $max ?></td>
				<td><?= $min ?></td>
				<td><?= $avg ?></td>
			</tr>
		</table>
	</div>
	</div>
</div>
</body>
</html>