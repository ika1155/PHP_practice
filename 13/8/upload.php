<?php

session_start();
session_regenerate_id();

if (empty($_SESSION['user']))
{
	header('Location:./login.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>13-8</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row my-3 justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						CSVファイルのアップロード
					</div>
					<div class="card-body">
						<?php if (isset($_SESSION['error']['msg'])): ?>
							<div class="alert alert-danger" role="alert">
								CSVファイルのアップロードに失敗しました。
							</div>
							<?php unset($_SESSION['error']['msg']) ?>
						<?php endif ?>
						<form method="post" action="update.php" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="text" class="form-label">CSVファイルを選択して下さい。</label>
								<input type="file" name="csv_file" class="form-control-file">
							</div>
							<input type="submit" value="送信" class="btn btn-primary">
						</form>
					</div>
					<div class="card-footer">
						<a href="./"> ← 戻る</a>
					</div>
				</div>
			</div>
			</div>	
	</div>
</body>
</html>