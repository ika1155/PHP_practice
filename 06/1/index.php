<?php 
session_start();
session_regenerate_id();

$str = '';
if (isset($_SESSION['str'])){
	$str = $_SESSION['str'];
}
?>	
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>06-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-5 justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<form method="post" action="action.php">
						<div class="mb-3">
							<label for="str" class="form-label">
								何か入力してください
							</label>
							<input type="text" name="str" value="<?= $str ?>" class="form-control">
						</div>
						<input type="submit" value="送信" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>