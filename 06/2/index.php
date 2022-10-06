<?php 
session_start();
session_regenerate_id();

if(isset($_GET['reset']) && isset($_SESSION['count']))
{
	unset($_SESSION['count']);
}


if (!isset($_SESSION['count']))
{
	$_SESSION['count'] = 0;
}
else
{
	$_SESSION['count']++;
}



?>	
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>06-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-5 justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					セッションを使ったカウンタ
				</div>
				<div class="card-body">
					<div class="mb-3">
						<label for="str" class="form-label">
							<?= $_SESSION['count'] ?>
						</label>
					</div>
					<a href="./" class="btn btn-primary">Count</a>
					<a href="./?reset" class="btn btn-outline-primary">Reset</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>