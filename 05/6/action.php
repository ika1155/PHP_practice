<?php
$date = $_POST['date'];

function dateJudge($str){
	//explode(区切り文字, 文字列, 配列の最大要素数)
	$ymd = explode('/', $str);
	//checkdate(月, 日, 年)
	if (checkdate($ymd[1], $ymd[2], $ymd[0]))
		return '入力されたのは正しい日付です。';
	else
		return '入力されたのは正しい日付ではありません。';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>05-6</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<!-- my-5　上下のマージンを3rem　全てのアイテムの左右中央揃え -->
	<div class ="row my-5 justify-content-center">
		<!-- グリッドシステム　md=PC   
		画面幅がMiduim以上のときはグリッドを●個持つカラムを生成-->
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">判定結果</div>
			<div class="card-body">
				<?= datejudge($date) ?>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>