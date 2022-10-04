<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>05-4</title>
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
			<div class="card-header">今のお気持ち</div>
			<div class="card-body">
				<?= 
				//文字列の中の改行文字\nなどに<br>を挿入して返す
				nl2br($_POST['str']) 
				?>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>