<?php 
$path = __DIR__.'/images/';
//move_uploaded_file(移動前のパス, 移動先のパス)
move_uploaded_file($_FILES['image_file']['tmp_name'], $path.$_FILES['image_file']['name']);

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
	<title>10-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row my-3">
			<?php $count = 1 ?>
			<?php foreach($files as $value):?>
				<div class="col md-3">
					<div class="card">
						<div class="card-body">
							<img src="./images/<?= $value ?>" class="img-fluid">
						</div>
					</div>
				</div>
				<?php if($count % 4 == 0): ?>
					</div>
					<div class="row my-3">
				<?php endif ?>
				<?php $count++ ?>
			<?php endforeach ?>
			<a href="./">戻る</a>
		</div>
	</div>
</body>
</html>