<?php
	session_start();
	session_regenerate_id();

	if(isset($_SESSION['error']))
	{
		$msg = $_SESSION['error']['msg'];
		$date = $_SESSION['error']['date'];
	}
	else
	{
		$msg = '';
		$dt = new DateTime();
		$date = $dt->format('Y/m/d');
	}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>09-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row my-3 justify-content-center">
        <div class="col-md-4">
		<div class="card">
			<div class="card-body">
				<?php if (isset($_SESSION['error'])): ?>
					<div class="alert alert-danger" role="alert">
						<?= $msg ?>
					</div>
				<?php endif ?>
				
				<form method="POST" action="action.php">
					<label>日付を入力してください</label>
					<input type="text" name="date" value="<?= $date ?>" id="date" class="form-control">
					<input type="submit" class="btn btn-primary">
				</form>
			</div>
		</div>
		</div>
		</div>		
	</div>
</body>
</html>