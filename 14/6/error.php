<?php

session_start();
session_regenerate_id();

$msg = "申し訳ございません。<br>エラーが発生しました。";
if(isset($_SESSION['err_msg']))
{
	$msg = $_SESSION['err_msg'];
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>14-6</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-3 justify-content-center"> <!-- flexboxコンテナのメイン軸の中心から配置 -->
	<div class="col-6">
		<div class="card">
			<div class="card-header">
					エラーが発生しました
			</div>
			<div class="card-body">
				<div class="alert alert-danger" role="alert">
					<?= $msg ?>
				</div>
				<a href="./logout.php" class="btn btn-danger">戻る</a>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>
<?php unset($_SESSION['err_msg']) ?>