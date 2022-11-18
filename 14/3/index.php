<?php
session_start();
session_regenerate_id();

$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

$dbh = new PDO($dsn, 'root', '');

$sql = 'SELECT * FROM todo_items ORDER BY expiration_date';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$todo = $stmt->fetchAll(PDO::FETCH_ASSOC);

$token = bin2hex(openssl_random_pseudo_bytes(32));
$_SESSION['token'] = $token;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>14-3</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="card">
		<div class="card-header">
			TODOリスト
		</div>
		<div class="card-body">
			<?php if (isset($_SESSION['err_msg'])): ?>
				<div class="alert alert-danger" role="alert">
					<?= $_SESSION['err_msg'] ?>
				</div>
			<?php endif ?>
			<form method ="post" action="add.php">
				<input type="hidden" name="token" value="<?= $token ?>">
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
					</tr>
					<?php foreach ($todo as $value):?>
						<tr>
							<td><?= $value['expiration_date'] ?></td>
							<td><?= $value['todo_item'] ?></td>
						</tr>
					<?php endforeach ?>
				</table>
			<?php endif ?>
		</div>
	</div>
	</div>
</body>
</html>