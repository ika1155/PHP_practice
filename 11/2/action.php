<?php
// http://www.php-ref.com/web/03_move_uploaded_file.html
// tmp_name テンポラリファイル名　アップロードされたファイルの一時的なパス
$fp = fopen('./work.txt', 'w');

if (fwrite($fp, $_POST['text']))
{
	$msg = '書き込みが完了しました。';
}
else
{
	$msg = '書き込みに失敗しました。';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>11-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-3 justify-content-center">
    <div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<p><?= $msg ?></p>
				<a href="./">戻る</a>
			</div>
		</div>
	</div>
	</div>	
	</div>
</body>
</html>