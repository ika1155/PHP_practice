<?php 
$dt = new DateTime('now', new DateTimeZone('asia/tokyo'));
// input type='date'のデフォルト値はハイフン区切り y-m-d
$today = $dt->format('Y/m/d');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>14-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-3 justify-content-center"> <!-- flexboxコンテナのメイン軸の中心から配置 -->
	<div class="col-6">
		<div class="card">
			<div class="card-header">
				TODOリストを期限日で検索
			</div>
			<div class="card-body">
				<form action="./show.php" method="post">
					<div class="mb-3">
						<label for="date" class="form-label">検索日</label>
						<input type="text" name="date" value="<?= $today ?>" class="form-control">
					</div>
					<input type="submit" value="検索" class="btn btn-primary">
				</div>
			</div>
		</div>
	<?php ?>
		
	</div>
	</div>
	</div>
</body>
</html>