<?php 
$str = $_POST['str'];

function lenCheck($str)
{
	if (mb_strlen($str) < 50)
		return true;
	else
		return false;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>05-7</title>
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
				<?php if (lenCheck($str)):?>
					入力された文字列は50文字以内です。
				<?php else: ?>
					入力された文字は50文字以上です。
				<?php endif ?>
			</div>
		</div>
	</div>
	</div>
</div>
</body>
</html>