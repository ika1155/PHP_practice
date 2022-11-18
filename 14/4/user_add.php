<?php 
session_start();
session_regenerate_id();

$token = bin2hex(openssl_random_pseudo_bytes(32));
$_SESSION['token'] = $token; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>14-4</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-3 justify-content-center">
    <div class="col-6">
		<div class="card">
			<div class="card-header">
				新規ユーザー登録
			</div>
			<div class="card-body">
				<?php if (isset($_SESSION['err_msg'])): ?>
					<div class="alert alert-danger" role="alert">
						<?= $_SESSION['err_msg'] ?>
					</div>
				<?php endif ?>
				<form method="post" action="./user_add_action.php">
					<input type="hidden" name="token" value="<?= $token ?>">	
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="text" name="email" class="form-control" 
							value="<?php if (isset($_SESSION['login']['email'])) echo $_SESSION['login']['email'] ?>">
					</div>
					<div class="mb-3">	
						<label for="pass" class="form-label">Password</label>
						<input type="password" name="pass" class="form-control">
					</div>
					<div class="mb-3">
						<label for="name" class="form-label">お名前</label>
						<input type="text" name="name" class="form-control"
						value="<?php if (isset($_SESSION['login']['name'])) echo $_SESSION['login']['name'] ?>">
					</div>
					<input type="submit" class="btn btn-primary" value="登録">
				</form>
			</div>
		</div>
	</div>
	</div>	
	</div>
</body>
</html>