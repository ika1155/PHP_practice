<?php

$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

$dbh = new PDO($dsn, 'root', '');

$sql = 'SELECT * FROM todo_items ORDER BY expiration_date';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$todo = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>08-5</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="card">
		<div class="card-header">
			TODOリスト
		</div>
		<div class="card-body">
			<form method ="post" action="add.php">
				<?php $today = date("Y-m-d") ?>
				<div class="row">
					<div class="col-3">
						<input type="date" name="expiration_date" value="<?= $today ?>" class="form-control">
					</div>
					<div class="col">
						<input type="text" name="todo_item" placeholder="TODOリストを入力してください" class="form-control">
					</div>
					<div class="col-2">
						<input type="submit" class="btn btn-primary mb-3">
					</div>
				</div>
			</form>

			<?php if(count($todo)>0): ?>
				<table class="table table-borderd">
					<tr>
						<th>期限日</th>
						<th>TODO項目</th>
						<th></th>
					</tr>
					<?php foreach ($todo as $value):?>
						<tr>
							<td><?= $value['expiration_date'] ?></td>
							<td><?= $value['todo_item'] ?></td>
							<td>
								<form method="post" action="action.php">
									<input type="hidden" name="id" value="<?= $value['id'] ?>">
									
									<input type="radio" value="0" name="completed">
									<label>未完了</label>

									<input type="radio" value="1" name="completed">
									<label>完了</label>

									<input type="checkbox" value="1" name="delete">
									<label>削除</label>
									<input type="submit" value="実行" class="btn btn-primary mb-3">
								</form>
							</td>
						</tr>
					<?php endforeach ?>
				</table>
			<?php endif ?>
		</div>
	</div>
	</div>
</body>
</html>