<?php 
$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

$dbh = new PDO($dsn, 'root', '');

$sql = "SELECT * 
		FROM todo_items 
		WHERE expiration_date = '".$_POST['date']."'";

$stmt = $dbh->prepare($sql);
$stmt->execute();

$lists = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
	<div class="row my-3 justify-content-center">
    <div class="col-8">
		<div class="card">
			<div class="card-header">
				検索結果
			</div>
			<div class="card-body">
				<table class="table table-borderd">
					<tr>
						<th>期限日</th>
						<th>TODO項目</th>
					</tr>
					<?php foreach ($lists as $list): ?>
						<tr>
							<th><?= $list['expiration_date'] ?></th>
							<th><?= $list['todo_item'] ?></th>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>