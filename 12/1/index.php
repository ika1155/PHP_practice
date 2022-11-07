<?php
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try
{
	$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
	$today = $dt->format('Y-m-d');

	$db = new TodoItems();
	$todo = $db->selectAll();
}
catch (Exception $e)
{
	var_dump($e);
	exit;
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>12-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<style>
		.complete{
			text-decoration: line-through;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="row my-3 justify-content-center"> <!-- flexboxコンテナのメイン軸の中心から配置 -->
	<div class="col-8"> <!-- flex: 0 0 auto; width: 66.6...%;-->
		<div class="card">
			<div class="card-header">
				TODOリスト
			</div>
			<div class="card-body">
				<form method ="post" action="add.php">
					<div class="row">
						<div class="col-3"> <!-- 横12等分のうちの3 -->
							<input type="date" name="expiration_date" value="<?= $today ?>" class="form-control">
						</div>
						<div class="col"> <!-- 横12等分のうちの7(残り) -->
							<input type="text" name="todo_item" placeholder="TODOリストを入力してください" class="form-control">
						</div>
						<div class="col-2"> <!-- 横12等分のうちの2 -->
							<input type="submit" class="btn btn-primary mb-3">
						</div>
					</div>
				</form>

				<?php if(count($todo) > 0): ?>
					<table class="table table-borderd">
						<tr>
							<th>期限日</th>
							<th>TODO項目</th>
							<th></th>
						</tr>
						<?php foreach ($todo as $value):?>
							<tr>
								<td class="<?php if($value['is_completed'] == 1) echo 'complete'?>">
									<?= $value['expiration_date'] ?>
								</td>
								<td class="<?php if($value['is_completed'] == 1) echo 'complete'?>">
									<?= $value['todo_item'] ?>
								</td>
								<td>
									<form method="post" action="action.php" class="form-inline">
										<input type="hidden" name="id" value="<?= $value['id'] ?>">
										
										<div class="form-check form-check-inline mb-3 mr-1">
											<input type="radio" value="0" id="camplete1" name="is_completed"
												class="form-check-input" <?php if($value['is_completed'] == 0) echo 'checked'?>>
											<label for="complete1" class="form-check-label">未完了</label>
										</div>

										<div class="form-check form-check-inline mb-3 mr-1">
											<input type="radio" value="1" id="camplete2" name="is_completed"
												class="form-check-input" <?php if($value['is_completed'] == 1) echo 'checked'?>>
											<label for="complete2" class="form-check-label">完了</label>
										</div>

										<div class="form-check form-check-inline mb-3 mr-1">
											<input type="checkbox" value="1" name="delete" id="delete" class="form-check-input"> 
											<label for="delete" class="form-check-label">削除</label>
										</div>
										<input type="submit" value="実行" class="btn btn-primary mb-3">
									</form>
								</td>
							</tr>
						<?php endforeach ?>
					</table>
				<?php endif ?>
				<a href="./csv.php" class="btn btn-outline-primary">CSVファイルに変換</a>
				<a href="./download.php" class="btn btn-outline-primary">CSVファイルをダウンロード</a>
				<a href="./upload.php" class="btn btn-outline-primary">CSVファイルをアップロードして更新</a>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>