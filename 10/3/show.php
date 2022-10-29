<?php 
session_start();
session_regenerate_id();

if (isset($_SESSION['error']))
{
	unset($_SESSION['error']);
}


$path = __DIR__.'/images/';

$tmp = scandir($path);

$files = [];

foreach ($tmp as $value){
	if (!preg_match('/^\./', $value) && is_file('./images/'.$value)){
		$files[] = $value;
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>10-3</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row my-3">
			<div class="slide-wrapper">
				<h2 class="slide-title">アップロードされた画像の一覧</h2>
				<div class="change-btn-wrapper">
					<div class="change-btn prev-btn">← 前へ</div>
					<div class="change-btn next-btn">次へ →</div>
				</div>
				<ul class="slides">
					<?php for ($i = 0; $i < count($files); $i++): ?>
						<li class="slide <?php if ($i == 0) echo 'active' ?> "><img src="./images/<?= $files[$i] ?>"></li>
					<?php endfor ?>
				</ul>
				<div class="index-btn-wrapper">
					<?php for ($i = 1; $i <= count($files); $i++): ?>
						<div class="index-btn"><?= $i ?></div>
					<?php endfor ?>
				</div>
      		</div>
		<a href="./">戻る</a>
		</div>
	</div>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>