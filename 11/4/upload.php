<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>11-4</title>
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
						<form method="post" action="update.php" enctype="multipart/form-data">
							<div class="mb-3">
								<label for="text" class="form-label">CSVファイルを選択して下さい。</label>
								<input type="file">
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