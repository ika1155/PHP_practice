<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>08-3</title>
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
		</div>
	</div>
	</div>
</body>
</html>