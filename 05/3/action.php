<?php
//https://www.php.net/manual/ja/ref.mbstring.php
	$str = $_POST['str'];

	//strlen=全角は2文字　mb_strlen=全角も1文字
	$len = mb_strlen($str);
	//substr(文字列,取り出し開始位置,文字のバイト数(mbなら文字数))
	$first = mb_substr($str, 0,1);
	$last = mb_substr($str, $len-1, 1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>05-3</title>
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
				<th>文字数</th>
				<th>最初の文字</th>
				<th>最後の文字</th>
			</tr>
			<tr>
				<td><?= $len ?></td>
				<td><?= $first ?></td>
				<td><?= $last ?></td>
			</tr>
		</table>
	</div>
	</div>
</div>
</body>
</html>